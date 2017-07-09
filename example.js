var https = require(["https"]);

var username = "cd61aa20ca0e42b3b571dd27e970a528";
var password = "ab8c1e862977c14456593f0310faa176";
var auth = "Basic " + new Buffer(username + ':' + password).toString('base64');

var request = https.request({
    method: "GET",
    host: "api.intrinio.com",
    path: "/companies?ticker=AAPL",
    headers: {
        "Authorization": auth
    }
}, function(response) {
    var json = "";
    response.on('data', function (chunk) {
        json += chunk;
    });
    response.on('end', function() {
        var company = JSON.parse(json);
        console.log(company);
    });
});

request.end();
