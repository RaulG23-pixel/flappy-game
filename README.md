# Flappy-game
A wordpress implementation of the project clumsy-bird from @ellisonleao

### Instructions

##### Test the game
to run the game locally you can use the command
``` npm run dev ``` in your web browser access to ```http://localhost:8001/index_copy.html``` to test the game
<br>

##### Installing it in Wordpress
if you want to incorporate the game in wordpress, you need to build a minified JS file using ``` npm run build ``` it generates a folder named build with the minified JS file of the game.

Once you built the minified file, compress the project folder into a Zip file and upload it as a plugin in your Wordpress admin panel.

##### Implementing the game
To implement the game in any page of your Wordpress project, create a shortcode using the widget pannel and paste this ```[flappy-game]```