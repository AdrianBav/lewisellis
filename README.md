# Lewis & Ellis

Lewis & Ellis is an actuaries & consultants firm. The company website was not responsive and was therefor not very readable on hand held and mobile devices.

## Project

The goal of this project was to retrofit the website and make it responsive so that it could be accessed on a range of mobile devices.

## Structure

I added the Foundation CSS framework to the theme to make use of it's responsive grid system and helpers. The layout and partials have been modified to hook into the Foundation CSS.

```
lewisellis/
+-- assets/
¦	+-- css/
¦		+-- app.css
¦		+-- foundation.min.css
¦		+-- normalize.css
¦	+-- images/
¦	+-- js/
+-- views/
¦	+-- layouts/
¦   	+-- default.php
¦   	+-- xml.php
¦	+-- partials/
¦   	+-- footer.php
¦   	+-- head.php
¦   	+-- header.php
¦   	+-- navigation.php
¦   	+-- scripts.php
¦   	+-- sslider.php
```

The point of interest here is the **app.css** file which builds on the Foundation CSS to customize it's components to achieve the Lewis & Ellis look.
