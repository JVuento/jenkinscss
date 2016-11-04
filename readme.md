# Jenkins dynamic css
Helps you to keep Jenkins instances look different easily. Change color and logo etc.
Basicly did this to help myself keeping track of my Jenkins instances by colouring them differently. 
Feel free to use, fork, pull request etc. Hope it helps somebody.

Update: VERSIONrip.php includes only altered tags. Usage: http://www.gnomelab.com/jenkinscss/2_19_1rip.php?fontsize=30px


## How to use it
There is different ways of using this. Basicly you call this php with address combined with version number and parameters you want to alter an then use it in one of following ways.
	Example: 2_19_1.php?bgcolor=green&headerheight=60px

### Parameters available at the moment (default in parentheses):
	bgcolor(white)
	headercolor(#000000)
	headerheight(40px)
	picaddress(../images/topbar.png) *will call file /userContent/layout/PICADDRESS.png so just fill name of file
	font(Helvetica, Arial, sans-serif)
	fontcolor(#333)
	fontsize(13px)
	crumbarcolor(#f6faf2)
	linkwidth(180px)
	
### Version numbers available at the moment:
	2_19_1 


### Simple Theme Plugin + download css
- Download file form "http://www.gnomelab.com/jenkinscss/VERSION.php?parameters"
	Example: http://www.gnomelab.com/jenkinscss/2_19_1.php?bgcolor=green&headerheight=60px
- Save it in  $JENKINS_HOME/userContent/NAME.css. 
- Fill css-field in Jenkins management with "http://JENKINSSERVER/userContent/NAME.css", where JENKINSSERVER is your server address and NAME is the name you saved the file with.
- If using your logo save it in $JENKINS_HOME/userContent/layout/ folder in your Jenkins server

### More

- You can of course host this php-file in your own php-server and call it. Remember that you must then host pictures in your php-server.
- You can download the created .css-file and overwrite existing Jenkins css with it (not recommended).
...

## Examples
- [Bluelarge](http://www.gnomelab.com/jenkinscss/bluelarge.css) Made with: http://www.gnomelab.com/jenkinscss/2_19_1.php?headercolor=blue&headerheight=60px
- [Yellow](http://www.gnomelab.com/jenkinscss/yellow.css) Made with: http://www.gnomelab.com/jenkinscss/2_19_1.php?headercolor=yellow
- [Bigtext](http://www.gnomelab.com/jenkinscss/bigtext.css) Made with: http://www.gnomelab.com/jenkinscss/2_19_1.php?fontsize=30px

