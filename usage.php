<!DOCTYPE html>

<html>
<head>
  <title> Dominate7th Usage </title>
<style >
#usageTitle{



}
#buttons{

}

.playerButton{
  padding-bottom: 5px;
  text-align: justify;
  font-size: 16px;
  background-color: white;


}
.playerButton2{
  padding-bottom: 5px;
  text-align: justify;
  font-size: 16px;
  background-color: #e9ecf2;



}
.playerButton  img{
  height: 20px;
  width: auto;
  padding-right:  8px;





}
.playerButton2  img{
  height:  20px;
  width:  auto;
  padding-right:  8px;





}
#buttonTitle{
font-family: fantasy;
font-style: normal;
font-weight: 800;
font-size: 26px;
color:#30302f;


}

.line{
border-bottom: 2px solid;
padding-top: 0px;


}
.smallLine{
border-bottom: .5px solid;
padding-top: 0px;


}
#playmode{


}

#playmodeMainTitle{
  text-align: center;
  display: block;
  margin: 0;




}

#playmodeTitle{
  font-family: fantasy;
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  display: inline-block;
  color:#2d542d;




}

#playModeText{
  font-style: normal;
  font-size: 16px;
  display: inline-block;




}

#mainDiv{
  padding-left: 10px;
}

#topMenus{


}

.topMenusTitle{
  font-family: fantasy;
  font-style: normal;
  font-weight: 800;
  font-size: 26px;
  display: inline-block;
  color:#30302f;


}
#topMenus img{


}

#mainDiv a{

  font-style: italic;
  font-size: 18px;
  color: #ba03fc;
}
.menuItem{
}
.menuItem2{
  background-color: #e9ecf2;


}
.menuTitle{
font-family: fantasy;
font-style: normal;
font-weight: 400;
font-size: 20px;

}
.boldLarge{
  font-size: 16px;
  font-weight: bold;
}
.smallTitle{
  font-family: fantasy;
  font-style: normal;
  font-weight: 800;
  font-size: 17px;
  color:#30302f;

}






</style>
<scipt>

</script>
</head>
<body>
  <div id="usageTitle">
<?php include("dominate7thMenu.php") ?>
</div>
<div id="mainDiv">

<div id="buttons">
<p id="buttonTitle"> The Buttons </p>
<p class="line"> </p>
<div class="playerButton">
<img src="images/play.png">
Plays / resumes the current selected track

</div>
<div class="playerButton2">
<img src="images/stop.png">
Stops the current track and  when the song played again it starts at zero seconds again

</div>


<div class="playerButton">
<img src="images/pause.png">
Pauses  the current track

</div>

<div class="playerButton2">
<img src="images/fastForward.png">
Skips the current track ahead 10 seconds

</div>
<div class="playerButton">
<img src="images/rewind.png">
Skips the current track back 10 seconds

</div>

<div class="playerButton2">
<img src="images/seekBack.png">
Starts playing the current track at 0 seconds again

</div>


<div class="playerButton">
<img src="images/seekForward.png">
Skips to the next song on the currently displayed playlist

</div>



<div class="playerButton2">
<img src="images/mute.png">
Mutes / unmutes the player

</div>

</div>

<div id="playMode">
  <div id="playModeMainTitle">
  <p id="playmodeTitle"> The Play Mode Button </p>
  <p id="platModeText"> Click the button to change playmode </p>
  <p class="line"> </p>
</div>
<div class="playerButton">
<img src="images/stopSong.png">
Stops playing when  the current song is finished

</div>
<div class="playerButton2">
<img src="images/repeatSong.png">

Replays the selected song when finshed

</div>
<div class="playerButton">
<img src="images/repeatPlaylist.png">

Plays the next song on the currently selected playlist when finished.

</div>



</div>
<p class="line"> </p>


<div id="topMenus">
  <p class="topMenusTitle"> The Top Menus</p>

  <div id="libraryMenu">  </div>
  <p class="line"> </p>

  <p class="menuTitle"> LibraryMenu </p>

<img src="images/musicLibraryMenu.png">
<p class=menuItem> <span class="boldLarge" > Open File </span> Opens a song and plays It.</p>
<p class=menuItem2> <span class="boldLarge" > Sort Music Folder </span> Opens   a  new  widnow for sorting music folders .</p>
<p class=menuItem> <span class="boldLarge" > Import Cd </span> If the currently displayed playlist is a CD playlist opens a new CD import window, otherwise it is disabled <a href="#FFmpegEnocoderWindow" > Go to Import window options here</a>.</p>
<p class=menuItem2> <span class="boldLarge" > Save Library </span> Saves your music library.</p>

<p class=menuItem> <span class="boldLarge" > Add Songs To Library</span>  Opens a new file chooser window and scans the selected directory for songs and adds them to your  library  and / or moves copies them  to your library folder if those settings are selected.</p>
<p class=menuItem2> <span class="boldLarge" > Encode Audio With FFMpeg</span>  Opens a new FFMpeg encoder window for encoding of audio files <a href="#FFmpegEnocoderWindow" > Go to Encoding window options here</a>.</p>

<p class=menuItem> <span class="boldLarge" > Library Settings</span>  Opens a new library settings window <a href="#LibrarySettingsWindow" > Go to library settings options here</a>.</p>

<p class=menuItem2> <span class="boldLarge" > Reload Playlist Tabs</span>  Creates a new playList tab  for all playlists in your library and all currently avaiable CDs  also can called by using COMMAND + R keys .</p>

<p class=menuItem> <span class="boldLarge" > Link Songs To Album Images</span>  Opne new Window for linking songs to the images in the same folder as them so they will display as part of the album art .</p>





</div>
<div id="windows">
<p class="line"> </p>


<div id="PlayListMenu">

<p class="menuTitle"> Playlist Menu </p>

<img src="images/playlistMenu.png">
<p class=menuItem2> <span class="boldLarge" > Playlist Settings</span>  Opens a new playist settings window <a href="" > Go to  playlist settings options here</a>.</p>

<p class=menuItem> <span class="boldLarge" > Add Songs To Playlist</span>   If the current playlist is not a smart playlist opnes a new file chooser window and scans the selected directory for songs and adds them to the current playlist
  and / or  adds them to the library and  moves copies them to the library folder if those settings are selected. Otherwise if the playlist is smart playlist it is disabled. </p>

<p class=menuItem2> <span class="boldLarge" > Edit Playlist Filter </span> Opens   a  new  widnow for editing the curent playlist <a href="" > Go to playlist edit /creation window options here</a>.</p>
<p class=menuItem> <span class="boldLarge" > New Playlist </span> Opens  new window for creating a NEW playlist.  <a href=""> Go to playlist edit /creation window options here</a></p>
<p class=menuItem2> <span class="boldLarge" > Shuffle PlayList </span>  Displays a menu for selected keys to shuffle the playList on IE. Artist, Genre, Album ECT.</p>
<p class=menuItem> <span class="boldLarge" > Display</span>  Displays a menu for selecting the keys to be displayed  in the playlist table  Song Title, Audio Format, Artist,  Composer, File Path Ect.</p>
</div>
<p class="line"> </p>

<p class="topMenusTitle"> The Windows</p>

<p class="line"> </p>


<div id="FFmpegEnocoderWindow">

<p class="menuTitle"> FFMpeg Encoder Window </p>


<img src="images/ffMpegWindow.png">
<p class=menuItem2> <span class="boldLarge" > FFmpeg Enocde Quality</span>  The quality of encoding FFmpeg will use</p>

<p class=menuItem> <span class="boldLarge" > Channel Mode</span>    Selects the number Of  channels to ennocde with Mono (1 Channel), Stereo (2 Channels), Five Point One (6 Channels).

<p class=menuItem2> <span class="boldLarge" > Bit Rate </span>   Selects the enocding bit rate in Bits per  Second 128000 b/s = 128 Kb/ S.
<p class=menuItem> <span class="boldLarge" > Encoding Format </span>   Selects the audio format to encode the files To</p>
<p class=menuItem2> <span class="boldLarge" > Split Track With .cue Files </span>  If selected .cue files will be parsed  and  upon encoding  split into individual tracks.</p>
<p class=menuItem> <span class="boldLarge" > Add Files</span>  Opens  a new file chooser that will find all audio files/ .cue files  in a given directory and add them to be encoded.</p>
<p class=menuItem2> <span class="boldLarge" > Encode </span>  Encodes  the given  files to the given output directory   that were added by either add files button or dragging them  to the files to encode list. .</p>
<p class=menuItem> <span class="boldLarge" > Select Output Location </span>  Opens a new file chooser to select the output directory .</p>


</div>
<p class="line"> </p>




<div id="Playlist Creator Window">

<p class="menuTitle"> Playlist Creator  Window </p>


<img src="images/playlistCreatorWindow.png">
<p class=menuItem2> <span class="boldLarge" > Playlist Name</span>  The name of the playlist.</p>

<p class=menuItem> <span class="boldLarge" > Playlist Kind </span>    The playlist kind smart or regular.
  <p class="smallLine"></p>

  <p class="smallTitle"> Create By Playlist Creator </p>


  <p class=menuItem2> <span class="boldLarge" > Select A Playlist Creator </span>    If this is selected a playlist creator will be used to create the playlist from a field key and value or all songs
    which will add all of the songs in your library  to the newly created playlist.

<p class=menuItem> <span class="boldLarge" >  Select Field Key </span>   Selects field key to make playList from.
<p class=menuItem2> <span class="boldLarge" > Select The Value To Search For </span>   Selects the field key value to create the playlist from. </p>
<p class="smallLine"></p>

<p class="smallTitle"> Create Search Criteria </p>


<p class=menuItem> <span class="boldLarge" > Select a Search Operator </span>  Selects the search operator AND will search for all criteria OR will search for any criteria.</p>
<p class=menuItem2> <span class="boldLarge" > Search Key</span>  The field key to search for the text In.</p>
<p class=menuItem> <span class="boldLarge" > Search Operator </span>  Whether  or not  the field key  contains, does not conatin or is equal to the given string text  .</p>
<p class=menuItem2> <span class="boldLarge" > Search Text </span>  The string of text to serch for .</p>



</div>

<p class="line"> </p>



<div id="LibrarySettingsWindow">
<p class="menuTitle"> Library Settings Window </p>

<img src="images/librarySettingsWindow.png">
<p class=menuItem> <span class="boldLarge" > Set Libray Folder</span>  Opens a new directory chooser, to select  the path to your library folder where music files are imported to  and if the settings are selcted to do so where songs are copied to</p>

<p class=menuItem2> <span class="boldLarge" > Set Fp Calc Path </span>    Opens a new file  chooser to select path to Fpcalc command line program used for getting audio tags from AcoustID  and MusicBrainz.

  <p class=menuItem> <span class="boldLarge" > Add Any Songs to Library </span>    If this is selected all songs added to  to dominate7th will be added to your library.
    <p class=menuItem2> <span class="boldLarge" > Move Songs to Library </span>    If this is selected  all songs added to  to dominate7th will be added   to your library , sorted, and then moved to  your library folder under the correct album artist, and / or bitrate and  audio file type.
      <p class=menuItem> <span class="boldLarge" > Copy Files Before Moving Them To Library Folder </span>    If this is selected when songs are moved to your library folder  it will  copy them  first( leaving the original file intact ) and then move the copied file.
        <p class=menuItem2> <span class="boldLarge" > Get Missing AudioFile Tags Via AcoustID / Music Brainz When Adding Song Files To Library" </span>    If this is selected for any untagged songs the tags will  be attempted  to be added by AcoustID and /  or MusicBrainz and the best result
          will be selected and  the tags applied to the file.

          <p class=menuItem> <span class="boldLarge" >  Show Notifications When a New Song Starts Playing </span>    If this is selected a notification will be shown every time a new songs starts playing.
            <p class=menuItem2> <span class="boldLarge" >  Show Notifications When Process Completes </span>    If this is selected a notification will be shown everytime a a process is finished sorting files, encoding files, moving files  ect.
              <p class=menuItem> <span class="boldLarge" >  Show Process Notifications </span>    If this is selected processes such as file encoding will show notifications.

                <p class=menuItem2> <span class="boldLarge" >  Save Music Libray on Tag Edits </span>     If this is selected every time a tag is edited  The music library will be saved.

                  <p class=menuItem> <span class="boldLarge" >  Save Music Libray Exit</span>    If this is selected the music library will saved on exiting the program.

                    <p class=menuItem2> <span class="boldLarge" >  Show Smaller Player On Window Minimize</span>    If this is selected when the main window is minimized  a mini player will pop up to allow you to play, skip stop and pause songs.
                       You can  also press command + M to bring up the mini player.

                      <p class=menuItem> <span class="boldLarge" >  Sort Music Foler By Bitrate</span>    If this is selected  new songs added to  your library folder will be sorted by bitrate.

                     <p class=menuItem2> <span class="boldLarge" >  Sort Music Foler By Audio File Type</span>    If this is selected  new songs added to  your library folder will be sorted by audio file type.


</div>

</div>
<p class="line"> </p>


<div id="AddingSongs">
<p class="menuTitle"> Adding Songs </p>

Songs can be added by dragging them to playlist table , or by  going to add songs to playlist or add songs to library menus . They are also added on importing of cds.



</div>
<p class="line"> </p>

<div id="AddingSongs">  </div>
<p class="menuTitle"> Deleting Songs </p>

Select any number of songs on the playlist table  and press the delete key to remove them from the playlist and / or your music library.




<p class="line"> </p>

<div id="info">

<div id="AddingSongs">

<p class="menuTitle"> Deleting Playlists </p>

Right click on any playlist tab to bring up a  menu that will have  the option to delete that playlist from your library.



</div>


<p class="line"> </p>

<div id="AddingSongs">

<p class="menuTitle"> Tagging Songs Via AcoustID  / Music Brainz </p>

Right click on any playlist table to bring up menu that  will  show song options and click "Get Track Information From Music Brainz" then in the results window
right click on the result to bring up a menu where you can select the correct result.



</div>

<p class="line"> </p>

<div id="AddingSongs">

<p class="menuTitle"> Editing  Audio Tags </p>


Click the edit tags checkbox and then click on any table cell to edit that songs information the tags will be automatically
written to metadata of the file if it is format that supports tagging via this app (Mp3, Mp4 (Mp4 audio, M4a and M4p audio), Ogg, Vorbis, Flac, Wav, Aiff, Dsf, and Wma).
To edit mutiple tags at once  select the songs you wish to edit  and then right click on the table and go to edit "Edit Track Tags" then  a window will come up allowing you to edit tags for mutiple songs at once.


</div>
<p class="line"> </p>

<div id="AddingSongs">

<p class="menuTitle"> Adding and Removing Album Art </p>


To edit album art  select the song(s) you wish to edit  art for  and then right click on the table and go to edit "Edit Track Tags" then window will come up allowing you tadd and remove album art. Click the embed checkbox to embed the art information
the physcial audio file otherwise the images are stored as file paths in the artwork section of the audio information class and only referenced by this app.

</div>

<p class="line"> </p>

<div id="AddingSongs">

<p class="menuTitle"> Adding Songs To Playlist </p>


To edit album art  select the song(s) you wish to add to another playlist for  and then right click on the table and go to edit "Add Songs To PlayList"  and select the playlist you wish to add them to.



</div>
</div>





</body>
</html>
