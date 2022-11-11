<?php /*
  Name:             Keyboard_gff_geez_mesob
  Copyright:        Keyboard © 2022 The Geʾez Frontier Foundation 
  Documentation:    
  Description:      
  Create Date:      23 Oct 2022
*/
  $pagename = 'Geʾez Mesob Keyboard Help';
  $pagetitle = Geʾez Mesob  Keyboard Help';
  $keymanpromourl = 'http://ethiopic.keymankeyboards.com';
  $style = <<<EXTRA
  .highlightExample {font-family: GeezWeb !important; font-weight: bold; font-size: 1.4em; color: #0000ff}
  .highlightKeys img {vertical-align:baseline !important}
  .input {font-weight: bold; font-size: 1.2em; color: #a64826}
  .output {font-weight: bold; font-size: 1.2em; color: #0000ff}
  .typing p, ul {margin-top: 0px; margin-bottom: 2px}
EXTRA;
  require_once('header.php');
?>
<style type="text/css" media="screen">
code {
    padding: 0.2em 0.4em;
    margin: 0;
    font-size: 85%;
    background-color: rgba(175, 184, 193, 0.2);
    border-radius: 6px;
    box-sizing: border-box;
}
</style>

<p style='margin:0px'>Keyboard &#169; 2022. Geʾez Frontier Foundation.</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' target="_blank" href='AmharicTyping-English.pdf'>Complete Typing Chart - English</a><br/>
<a style='margin-left:30px' target="_blank" href='AmharicTyping-Amharic.pdf'>Complete Typing Chart - Amharic</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Author">Authorship</a><br/>


<div id='Overview'>
<h2>Overview</h2>
<p style="text-align: justify;">
This is a language neutral touch (only) keyboard for mobile devices.  The keyboard provides all Ethiopic letters in active use on a single layer in circular, semi-clockwise orientation.  It is meant be intuitive for new typist, but supports faster typing for experienced typist compared to the similar <a href="https://github.com/keymanapp/keyboards/tree/master/release/gff/gff_mesobe_fidelat">Mesobe Fidelat Keyboard </a> keyboard.
</p>
</div>

<div id='Using'>
<h2>Using this Keyboard</h2>

<div>
<h2><a id="letters" name="mobile"></a>Mobile Layout &amp; Layers</h2>

<p style="text-align: justify;">
The mobile keyboard uses the “Mesob” style layout of letters where letters are arranged in a series of 4 rings.  Modifier keys that will change the vowel of a letter appear in the outer most ring. 
</p>

<p style="text-align: justify;">
The Mesob layout also has the goal of providing *all* letters actively used by the languages written with Geʾez script in a single keyboard “layer”. Given the high number of letters appearing on the keyboard, it is a better fit for tablet devices than for typical mobile phones. Consider using the more compact <a href="https://github.com/keymanapp/keyboards/tree/master/release/gff/gff_mesobe_fidelat">Mesobe Fidelat Keyboard</a> which is a similar design and fits more comfortably on the smaller mobile phone screens.
</p>


<div style="margin-left: 1em;">
<h3>Letters</h3>
<p style="text-align: justify;">
The most frequently used letters generally appear in inner rings, and less used letter appear in the out rings. Letter appear in a semi-alphabetic arrangement in the clockwise dicrection, but not strictly so.  Some effort is made to group related letters together (related either by sound or shape).
</p>

<img src="images/gff_mesob_halo-default-1.jpeg" style="border: 1px solid black;"/>

<p style="text-align: justify;">
Tapping a key once enters it on to the screen in the 6th (ሳድስ) form and a “halo” appears of the related letters. Tapping a related letter will update the first letter, or tap the 6th letter again to go back to the starting keyboard. 
</p>

<img src="images/gff_mesob_halo-default-2.jpeg" style="border: 1px solid black;"/>

<p style="text-align: justify;">
Note the highlighted arrow button, <code>▶</code>, above the Enter key, it will appear for large families of related letters.  When you need them, the <code>▶</code> button will bring up a 2nd halo of letters that are used less frequently. Note the reverse <code>◀</code> button which will go back to the first halo.
</p>

<img src="images/gff_mesob_halo-default-3.jpeg" style="border: 1px solid black;"/>
</div>

<div style="margin-left: 1em;">
<h3>Punctuation</h3>

<p style="text-align: justify;">
On the letter keyboards, the `።` and `’` keys are the use popup menus to offer the most frequently used punctuation that did not fit easily on the keyboard.  Tap the `@` key to access all available Western punctuation as shown:
</p>

<img src="images/gff_mesob_halo-punctuation-1.jpeg" style="border: 1px solid black;"/>
</div>

<div style="margin-left: 1em;">
<h3>Numerals</h3>

<p style="text-align: justify;">
Tap the `1/፩` key on the letter keyboards to shift to numerals. The numerals layer presents the Western numbers, Geʾez numbers, and all Geʾez punctuation.
</p>

<img src="images/gff_mesob_halo-numerals-1.jpeg" style="border: 1px solid black;"/>

</div>
</div>

<div>
<h2>Tablet Layout &amp; Layers</h2>

<p style="text-align: justify;">
The Mesob tablet layout is identical to the mobile phone layout. 
</p>

</div>
</div>

<div id="Troubleshooting">
<h2>Troubleshooting</h2>
<p class='keymanweb'>It is expected some of the newer letters introduced for the Gurage language will not appear on screen when using
Keyman with other apps, such as for text messaging.  This will be resolved in the near future when companies like Apple and Samsung update
their products.</p>

<p>For any other questions, <a target="_blank" href="https://keyman.com/contact/">contact us</a>.</p>

</div>

<div id="Resources">
<h2>Further Resources</h2>

<div id="Related">
<h3>Related Keyboard Layouts</h3>
<p>Keyboard Layouts for other Ethiopic languages:</p>
<p><a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_awn_7">Awngi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_bcq_7">Bench</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_blin">Blin</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mdx_7">Dizi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_geez">Ge'ez</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_mym_7">Me'en</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_muz_7">Mursi</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_sgw_7">Sebatbeit</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_suq_7">Suri</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_eritrea">Tigrigna (Eritrea)</a><br/>
<a href="/go?language=ethiopic&amp;keyboard=Keyboard_gff_tigrinya_ethiopia">Tigrigna (Ethiopia)</a></p>

</div>
<div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://keymankeyboards.com/?id=455">Download the Amharic Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/amharic.htm">More on the Amharic Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Amharic_language">More on the Amharic Language at Wikipedia.org</a><br/></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/ethiopic.htm">More on the Ge'ez Script at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/Ge'ez_alphabet">More on the Ge'ez Script at Wikipedia.org</a></p>
</div>
</div>

<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 4.1</p>

</div>

<div id="VersionHistory">
<h3>Version History</h3>
<dl>
  <dt>Version 1.0 23 Oct 2022</dt>
  <dd>Initial release.</dd>
</dl>

<div id="Author">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by the Geʾez Frontier Foundation.  SIL International graciously acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb. Their effort assists in enabling people to communicate in their own language.
</p>
</div>
<div id="Copyright">
<h3>Copyright and Terms of Use</h3>
<p>
The Amharic keyboard layout for Keyman Desktop and KeymanWeb is Copyright 1997-2018 Ge'ez Frontier Foundation and SIL International.  It may be freely distributed and used under the terms of <a href="https://opensource.org/licenses/MIT">The MIT License</a>.
</p>

</div>


