yolo = 0
if yolo:
  print("Hello")
else:
  print("Yolo is", yolo)

for friend in ['Alex', 'Andrew', 'Ben']:
  print(friend, "please come to my party!")

age = 0
while age != "24":
  age = input("What is your age? ")

name = "Ahmed"
guess = input("Guess name:")
pos = 0
while guess != name and pos < len(name):
  print("Nope thats not the name, hint: letter ", end='')
  print(pos + 1, "is", name[pos] + ". ", end='')
  guess = input("Guess again: ")
  pos = pos + 1

if pos != len(name) and name != guess:
  print("Too bad, you couldn't guess the name, the name was", name)
else:
  print("That's great! you guessed it correctly. The name is", name)
