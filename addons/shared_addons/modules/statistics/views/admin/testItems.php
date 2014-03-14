<div class="one_full">
 <ul id="breadcrumbs-one">
		
		<li><a href="" > Statistics</a></li>
		<li><a href="" >  <?php echo "(course name)"." Tests" ?></a></li>
                <li><a href="" class="current">  <?php echo "(course name)"." Test Items" ?></a></li>
		
	</ul>
  
</div>

<div class="one_full">
<section class="title blue">
	<h4> <i class="icon-list-alt" style="margin-top:4px; margin-right: 4px"></i><?php echo "Course name"." Test Items" ?></h4>
</section>

     <section class="item">
 
         <div class="content">
             <table class="tablesorter" id="sortTableBas">
                 <thead>
                    <th width="80%">Item Question</th>
                    <th width="10%">Correct</th>
                    <th width="10%">Wrong</th>
                 </thead>
                 
                 <tbody>
                     <tr>
                         <td>1.What is your name?</td>
                         <td><a href="<?php echo site_url('admin/statistics/modal_itemCorrect/');?>" class=" smallerCbox cboxElement label modal">20</a></td>
                         <td><a href="<?php echo site_url('admin/statistics/modal_itemWrong/');?>" class="smallerCbox cboxElement modal label">0</a></td>
                     </tr>
                     
                 </tbody>
                 
             </table>
              <div class="pager" id="pager">
<form>
    <?php echo Asset::img('module::first.png', 'alt text', array('class' => 'first')); ?>
    <input type="text" class="pagedisplay"/>
    <?php echo Asset::img('module::next.png', 'alt text', array('class' => 'next')); ?>
    <?php echo Asset::img('module::last.png', 'alt text', array('class' => 'last2')); ?>
  
 
  <select class="pagesize">
    <option selected="selected"  value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option  value="40">40</option>
  </select>
</form>
        </div>
             
         </div>
     </section>
  

		 
     
  
	

       
       
        </div>
           