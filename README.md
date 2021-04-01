# Coding Assignment

## Introduction
This project is a UI of a web page. The project contains these files:
- `main.html` : The home page:
  - Contains all infomation same with requirements given. User can select the display language is English/Finnish. There is an animation of the number of clients, users and employees so that those numbers will be counted up to a specified number.
  - User can subscribe to the newsletter and receives daily news. The form has connected with `thankyou.php` file so that the infomation will be displayed on that `.php` file.
  - When user clicks to the **Contact us** button in the **footer** part, the server will open the mail application (gmail/Mail app).
- `mainSuomi.html`: The home page in Finnish. 
- `style.css`, `style1.css`: general style of all pages no matter what device is being used.
- `style2.css`: Style of `.php` page and style of all pages when the devices max-width is changed.
- `index.js`: contains Javascript function:
  - The first function (**display()**) will control the search button when the device's max-width is less than 700px (normally the device is smartphones or tablets when it rotates vertically.
  - The second function will set the number of clients, users and employees' animation. The number will be counted from 0 to the desired number in 1 seconds, due to the `setTimeout(newNumber, 1)` methods, with 1 equilvalent with 1 seconds.
- `thankyou.php`: received the data from the subscribe part in `main.html` and display in a new html file in the terms of a thank-you notification. It has a button the return back to home page (`main.html`) file.


