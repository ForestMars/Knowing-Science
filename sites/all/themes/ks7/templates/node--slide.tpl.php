<style>
 
 h1
 {
 display:none;
 }
 
.node
{
padding:0px;
margin:0px;
}
.terms
{display:none;}

#wrapper #container #center {
float:left;
position:relative;
top:-39px;
left:-25px;
width: 900px;
margin:0px auto 0px;
padding:10px 0px;
border:#F00 0px solid;
background:none;
}
.homeDisplay
{
display:block;
height:390px;
width:960px;
margin:0px auto;
background-repeat:no-repeat;
border:#F00 0px solid;
position:relative;
top:30px;
left:-0px;
}

.buttonGrid
{
display:block;
width:175px;
height:110px;
position:relative;
top:-225px;
left:280px;
border:0px #ccc dotted;
}

.GridWrapper
{
display:block;
width:900px;
height:400px;
border:1px #eff dotted;
position:relative;
top:20px;
}

.smallGrid
{
display:block;
width:440px;
height:210px;
position:relative;
top:-470px;
left:470px;
border:0px #ccc dotted;
}

.smallGrid td
{
display:block;
float:left;
text-align:center;
width:105px;
height:160px;
border-right:0px #ccc dotted;
}



.thumbnail, .thumbnail2, .thumbnail3{
position: relative;
z-index: 0;
}

.thumbnail:hover, .thumbnail2:hover, .thumbnail3:hover{
background-color: transparent;
z-index: 50;
}

.thumbnail span, .thumbnail2 span, .thumbnail3 span{ /*CSS for enlarged image*/
position: absolute;
background-color: transparent;
padding: 5px;
left: -1000px;
border: 0px dashed gray;
visibility: hidden;
color: black;
text-decoration: none;
}

.thumbnail span img, .thumbnail2 span img, .thumbnail3 span img{ /*CSS for enlarged image*/
border-width: 0;
padding: 2px;
}

.thumbnail:hover span, .thumbnail2:hover span, .thumbnail3:hover span{ /*CSS for enlarged image on hover*/
visibility: visible;
top: -170px;
left: 180px; /*position where enlarged image should offset horizontally */
}
.thumbnail2:hover span{ /*CSS for enlarged image on hover*/
visibility: visible;
top: -200px;
left: 180px; /*position where enlarged image should offset horizontally */
}
.thumbnail3:hover span{ /*CSS for enlarged image on hover*/
visibility: visible;
top: -235px;
left: 180px; /*position where enlarged image should offset horizontally */
</style>


<div class="homeDisplay"> <?php if (field_view_field('node', $node, 'field_base_image')): ?>
<?php print render($content['field_base_image']); ?>
<?php endif;  ?>
 
<div class="buttonGrid">

 
 <a class="thumbnail" href="#thumb"><img src="/sites/all/themes/ks7/images/btn_students.jpg" width="161px" height="27px" border="0" /><span><img src="/sites/all/themes/ks7/images/students_overlay.png" /></span></a>
 <br />
  <a class="thumbnail2" href="#thumb2"><img src="/sites/all/themes/ks7/images/btn_educators.jpg" width="161px" height="27px" border="0" /><span><img src="/sites/all/themes/ks7/images/educators_overlay.png" /></span></a>
 <br />  
   <a class="thumbnail3" href="#thumb3"><img src="/sites/all/themes/ks7/images/btn_school_district.jpg" width="161px" height="27px" border="0" /><span><img src="/sites/all/themes/ks7/images/school_overlay.png" /></span></a>

 

</div>


<div class="smallGrid"><table>
<tr>
<td><a href="/grade-pre-k-package"><img src="/sites/all/themes/ks7/images/sm_covers_prek.png"></a><br /><a href="/grade-pre-k-package">Pre-K</a></td>
<td><a href="/grade-k-package"><img src="/sites/all/themes/ks7/images/sm_covers_kindergarten.png"></a><br /><a href="/grade-k-package">Kindergarten</a></td>
<td><a href="/grade-1-package"><img src="/sites/all/themes/ks7/images/sm_covers_1st.png"></a><a href="/grade-1-package">Grade 1</a></td>
<td><a href="/grade-2-package"><img src="/sites/all/themes/ks7/images/sm_covers_2nd.png"></a><a href="/grade-2-package">Grade 2</a></td>
</tr>
<tr>
<td><a href="/grade-3-package"><img src="/sites/all/themes/ks7/images/sm_covers_3rd.png"></a><br /><a href="/grade-3-package">Grade 3</a></td>
<td><a href="/grade-4-package"><img src="/sites/all/themes/ks7/images/sm_covers_4th.png"></a><br /><a href="/grade-4-package">Grade 4</a></td>
<td><a href="/grade-5-package"><img src="/sites/all/themes/ks7/images/sm_covers_5th.png"></a><br /><a href="/grade-5-package">Grade 5</a></td>
<td><a href="/grade-6-package"><img src="/sites/all/themes/ks7/images/sm_covers_6th.png"></a><br /><a href="/grade-6-package">Grade 6</a></td>
</tr>
</table></div>
</div>
 




 
