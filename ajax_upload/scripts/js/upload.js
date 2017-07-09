$(document).ready(function(){
  $("#form-upload").on('submit', uploadFiles);
  var files;
  // Add events
  $('input[type=file]').on('change', prepareUpload);
});
function selectedFiles(){
    var x = document.getElementById("file");
    var txt = "";
    var length = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            if (x.files.length == 1) {
              length = x.files.length + " file selected.";
            }
            if (x.files.length > 1) {
              length = x.files.length + " files selected."
            };
            for (var i = 0; i < x.files.length; i++) {
                txt += "<li><strong>File</strong></li>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + parseInt("" +file.size / 1024) + " KB <br>";
                }
            }
        }
    }
    else {
        if (x.value == "") {
            txt += "Select one or more files.";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
    }
    document.getElementById("selected").innerHTML = txt;
    document.getElementById("label").innerHTML = length;
}

// Grab the files and set them to our variable
function prepareUpload(event){
  files = event.target.files;
  console.log(event);
}
function uploadFiles(event){
  event.stopPropagation();
  event.preventDefault();
  var data = new FormData();
  $.each(files, function(key, value)
  {
      data.append(key, value);
  });
  $.ajax({
      url: 'scripts/php/upload.php?files',
      type: 'POST',
      data: data,
      cache: false,
      dataType: 'json',
      processData: false, // Don't process the files
      contentType: false, // Set content type to false as jQuery will tell the server its a query string request
      success: function(data, textStatus, jqXHR)
      {
          if(typeof data.error === 'undefined')
          {
              // Success so call function to process the form
              submitForm(event, data);
          }
          else
          {
              // Handle errors here
              console.log('ERRORS: ' + data.error);
          }
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
          // Handle errors here
          console.log('ERRORS: ' + textStatus);
          // STOP LOADING SPINNER
      }
  });
}
function submitForm(event, data)
{
  // Create a jQuery object from the form
    $form = $(event.target);

    // Serialize the form data
    var formData = $form.serialize();

    // You should sterilise the file names
    $.each(data.files, function(key, value)
    {
        formData = formData + '&filenames[]=' + value;
    });

    $.ajax({
        url: 'scripts/php/upload.php',
        type: 'POST',
        data: formData,
        cache: false,
        dataType: 'json',
        success: function(data, textStatus, jqXHR)
        {
            if(typeof data.error === 'undefined')
            {
                // Success so call function to process the form
                $('label').text('SUCCESS: ' + data.success);
            }
            else
            {
                // Handle errors here
                console.log('ERRORS: ' + data.error);
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            // Handle errors here
            console.log('ERRORS: ' + textStatus);
        },
        complete: function()
        {
            // STOP LOADING SPINNER
        }
    });
}
