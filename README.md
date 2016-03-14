# Moosik
> By Scott Franklin & Joseph Listro

A mobile web music controller.
## Working Documentation / Program Logs
### Goal
Create a dynamic web-based mp3 player.
### Brainstorm Points
* Barebone app is to be developed first; HTML5 will play the mp3 with the <audio> tag (see: http://www.w3schools.com/html/html5_audio.asp)
* User should be able to click different songs without any hard-refreshing occurring.
  * Tentative plan: AJAX/JavaScript w/ PHP for server side requests (see: http://www.w3schools.com/ajax/ajax_php.asp) 
  * http://stackoverflow.com/questions/10792163/change-audio-src-with-javascript
* All-in-one package support end-goal
* Open Source!!!!
* Inspiration?: http://www.jplayer.org/ - we can do it better though!
###Progress
* Alpha v.0.000001 (3/09/2016 - 3/13/2016)
  * Unstyled HTML5 audio tag can switch between 2 songs without refreshing!
  * Files uploaded: *player.zip* and *test.js*
  * Audio styling
    * <audio> html5 tag is really cool: https://gist.github.com/afabbro/3759334
  * Scott is bad at css lol
* Alpha v.0.000001 (3/20/2016)
  * Added dynamic audio list population!
  * can point to any directory full of .mp3 files and the code will populate the page with the files and the onClick events function properly etc
