# Jenkins dynamic css
Helps you to keep Jenkins instances look different easily. Change color and logo etc.
Basicly did this to help myself keeping track of my Jenkins instances by colouring them differently. 
Feel free to use, fork, pull request etc. Hope it helps somebody.

## How to use it
There is different ways of using this. Basicly you call this php with address compined with version number and parameters you want to alter an then use it in one of following ways.
> Example: 2_19_1.php?bgcolor=green&headerheight=60px

### Parameters available at the moment (default in parentheses):
> bgcolor(white)
> headercolor(#000000)
> headerheight(40px)
> picaddress(../images/topbar.png) *will call file /userContent/layout/PICADDRESS.png so just fill name of file
> font(Helvetica, Arial, sans-serif)
> fontcolor(#333)
> fontsize(13px)
	
### Version numbers available at the moment:
> 2_19_1 

### Simple Theme Plugin + use css from gnomelab.com
Install Simple Theme Plugin (https://wiki.jenkins-ci.org/display/JENKINS/Simple+Theme+Plugin)
Fill css-field in Jenkins management with "http://www.gnomelab.com/jenkinscss/VERSION.php?parameters"
> Example: http://www.gnomelab.com/jenkinscss/2_19_1.php?bgcolor=green&headerheight=60px

### Simple Theme Plugin + download css
Download file form "http://www.gnomelab.com/jenkinscss/VERSION.php?parameters"
> Example: http://www.gnomelab.com/jenkinscss/2_19_1.php?bgcolor=green&headerheight=60px
Save it in  $JENKINS_HOME/userContent/NAME.css
Fill css-field in Jenkins management with "http://JENKINSSERVER/userContent/NAME.css", where JENKINSSERVER is your server address and NAME is the name you saved the file with.

### More
You can of course host this php-file in your own php-server and call it instead of gnomelab.com.
You can download the created .css-file and overwrite existing Jenkins css with it (not really recommended).
...

## Examples
http://www.gnomelab.com/jenkinscss/bluelarge.css (http://www.gnomelab.com/jenkinscss/2_19_1.php?headercolor=blue&headerheight=60px)
http://www.gnomelab.com/jenkinscss/yellow.css (http://www.gnomelab.com/jenkinscss/2_19_1.php?headercolor=yellow)
http://www.gnomelab.com/jenkinscss/bigtext.css (http://www.gnomelab.com/jenkinscss/2_19_1.php?fontsize=30px)

## To be solved (not working at the moment)

### Parameters available at the moment (default in parentheses):
> textpic(1) *0 for text 1 for pic
> textpicaddress (../userContent/layout/text.png)
> textpictext(Jenkins)