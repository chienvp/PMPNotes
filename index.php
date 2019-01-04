<?php
include 'include/list.php';
include 'include/term.php';
include 'include/trick.php';
include 'include/rita-note.php';
include 'include/flashcard.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>PMP</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet prefetch' href='css/materialize.min.css'>  
<link rel="stylesheet" href="css/term.css"> 
</head>
<body> 
<div class="container">
		<a class="waves-effect waves-light btn" onClick="expandAll();"><i class="material-icons left">fullscreen</i>Expand All</a>
		<a class="waves-effect waves-light btn" onClick="collapseAll();"><i class="material-icons left">fullscreen_exit</i>Collapse All</a>
	<ul class="collapsible" data-collapsible="expandable">
		<li>
			<div class="collapsible-header red">Flash Card</div>
			<div class="collapsible-body">
				<ul class="collapsible" data-collapsible="expandable">
					<?php foreach ($arrKnowledgeCus AS $key=>$value){?>
						<li>
						  <div class="collapsible-header red lighten-3"><?php echo $key .". ". $value?></div>
						  <div class="collapsible-body" style="padding:0px 3px 0px 3px">
							<ul class="collapsible" data-collapsible="expandable">
								<?php 
								if(isset($arrFCList[$key])){
									$i=1;
								foreach ($arrFCList[$key] AS $ikey=>$ivalue){?>
									<li>
									  <div class="collapsible-header" style="background-color:#ffebee;text-transform:initial;font-size:20px;    font-weight:401;"><?php echo $i.'. '.$ikey;?></div>
									  <div class="collapsible-body"><p><?php echo $ivalue;?></p></div>
									</li>
					<?php $i++;} }?>
							</ul>
						  </div>
						</li>
					 <?php }?>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header orange lighten-1">Project Management Terms</div>
			<div class="collapsible-body">
				<ul class="collapsible" data-collapsible="expandable">
					<?php foreach ($arr AS $key=>$value){?>
						<li>
						  <div class="collapsible-header orange lighten-3"><?php echo $key .". ". $value?></div>
						  <div class="collapsible-body" style="padding:0px 3px 0px 3px">
							<ul class="collapsible" data-collapsible="expandable">
								<?php 
								if(isset($arrterm[$key])){
								foreach ($arrterm[$key] AS $ikey=>$ivalue){?>
									<li>
									  <div class="collapsible-header" style="background-color:#FFF3E0;"><?php echo $ikey;?></div>
									  <div class="collapsible-body"><p><?php echo $ivalue;?></p></div>
									</li>
					<?php } }?>
							</ul>
						  </div>
						</li>
					 <?php }?>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header yellow accent-4">Process Group and Knowledge Area Mapping</div>
			<div class="collapsible-body">
				<ul class="collapsible" data-collapsible="expandable">
					<?php foreach ($arrPG AS $key=>$value){?>
						<li>
						  <div class="collapsible-header amber lighten-3"><?php echo $key .". ". $value?></div>
						  <div class="collapsible-body" style="padding:0px 3px 0px 3px">
							<ul class="collapsible" data-collapsible="expandable">
								<?php 
								if(isset($arrITTO[$key])){
								foreach ($arrITTO[$key] AS $ikey=>$ivalue){
									?>
									<li>
									  <div class="collapsible-header <?php echo $ivalue['color'];?>"><?php echo $ivalue['process'];?></div>
									  <div class="collapsible-body"><p style="font-size: 14px;"><?php echo $ivalue['process_value'];?></p></div>
									</li>
								<?php } }?>
							</ul>
						  </div>
						</li>
					 <?php }?>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header cyan lighten-1">Rita's Process Chart</div>
			<div class="collapsible-body">
				<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column-rita initiating-rita'>
			<span class='drag-column-header initiating'><h2>INITIATING</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item-rita'>Select project manager</li>
				<li class='content-item-rita'>Determine company culture & existing systems</li>
				<li class='content-item-rita'>Collect processes, procedures, & historical information</li>
				<li class='content-item-rita'>Divide large projects into phases or smaller projects</li>
				<li class='content-item-rita'>Understand business case & benefits management plan</li>
				<li class='content-item-rita'>Uncover initial requirements, assumptions, risks, constraints & existing agreements</li>
				<li class='content-item-rita'>Assess project & product feasibility within the given constraints</li>
				<li class='content-item-rita'>Create measurable objectives & success criteria</li>
				<li class='content-item-rita'>Develop project charter</li>
				<li class='content-item-rita'>Identify stakeholders & determine their expectations, interest, influence, & impact</li>
				<li class='content-item-rita'>Request changes (1)</li>
				<li class='content-item-rita'>Develop assumption log</li>
				<li class='content-item-rita'>Develop stakeholder register</li>
			</ul>
		</li>
		<li class='drag-column-rita planning-rita'>
			<span class='drag-column-header planning'><h2 class='headertitle'>PLANNING</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item-rita'>Determine development approach, life cycle, & how you will plan for each knowledge area</li>
				<li class='content-item-rita'>Define & prioritize requirements</li>
				<li class='content-item-rita'>Create project scope statement</li>
				<li class='content-item-rita'>Assess what to purchase & create procurement documents</li>
				<li class='content-item-rita'>Determine planning team</li>
				<li class='content-item-rita'>Create WBS & WBS dictionary</li>
				<li class='content-item-rita'>Create activity list</li>
				<li class='content-item-rita'>Create network diagram</li>
				<li class='content-item-rita'>Estimate resource requirements</li>
				<li class='content-item-rita'>Estimate activity durations & costs</li>
				<li class='content-item-rita'>Determine critical path</li>
				<li class='content-item-rita'>Develop schedule</li>
				<li class='content-item-rita'>Develop budget</li>
				<li class='content-item-rita'>Determine quality standards, processes, & metrics</li>
				<li class='content-item-rita'>Determine team charter & all roles & responsibilities</li>
				<li class='content-item-rita'>Plan communications & stakeholder engagement</li>
				<li class='content-item-rita'>Perform risk identification, qualitative & quantitative risk analysis, & risk response planning</li>
				<li class='content-item-rita'>Go back - iterations</li>
				<li class='content-item-rita'>Finalize procurement strategy & documents</li>
				<li class='content-item-rita'>Create change & configuration management plans</li>
				<li class='content-item-rita'>Finalize all management plans</li>
				<li class='content-item-rita'>Develop realistic & sufficient project management plan & baselines</li>
				<li class='content-item-rita'>Gain formal approval of the plan</li>
				<li class='content-item-rita'>Hold kickoff meeting</li>
				<li class='content-item-rita'>Request changes (2)</li>
			</ul>
		</li>
		<li class='drag-column-rita executing-rita'>
			<span class='drag-column-header executing'><h2 class='headertitle'>EXECUTING</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item-rita'>Execute work according to the project management plan</li>
				<li class='content-item-rita'>Produce product deliverables (product scope)</li>
				<li class='content-item-rita'>Gather work performance data</li>
				<li class='content-item-rita'>Request changes (3)</li>
				<li class='content-item-rita'>Implement only approved changes</li>
				<li class='content-item-rita'>Continuously improve, perform progressive elaboration</li>
				<li class='content-item-rita'>Follow processes</li>
				<li class='content-item-rita'>Determine whether quality plan & processes are correct & effective</li>
				<li class='content-item-rita'>Perform quality audits & issue quality report</li>
				<li class='content-item-rita'>Acquire final team & physical resources</li>
				<li class='content-item-rita'>Manage people</li>
				<li class='content-item-rita'>Evaluate team & individual performance; provide training</li>
				<li class='content-item-rita'>Hold team-building activities</li>
				<li class='content-item-rita'>Give recognition & rewards</li>
				<li class='content-item-rita'>Use issue logs</li>
				<li class='content-item-rita'>Facilitate conflict resolution</li>
				<li class='content-item-rita'>Release resources as work is completed</li>
				<li class='content-item-rita'>Send & receive information & solicit feedback</li>
				<li class='content-item-rita'>Report on project performance</li>
				<li class='content-item-rita'>Facilitate stakeholder engagement & manage expectations</li>
				<li class='content-item-rita'>Hold meetings</li>
				<li class='content-item-rita'>Evaluate sellers, negotiate & contract with sellers</li>
				<li class='content-item-rita'>Use & share project knowledge</li>
				<li class='content-item-rita'>Execute contingency plans</li>
				<li class='content-item-rita'>Update project management plan & project doc</li>
			</ul>
		</li>
		<li class='drag-column-rita monitoring-rita'>
			<span class='drag-column-header monitoring'><h2 class='headertitle'>MONITORING & CONTROLLING</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item-rita'>Take action to monitor & control the project</li>
				<li class='content-item-rita'>Measure performance against performance measurement baseline</li>
				<li class='content-item-rita'>Measure performance against other metrics in the project management plan</li>
				<li class='content-item-rita'>Analyze & evaluate data & performance</li>
				<li class='content-item-rita'>Determine if variances warrant a corrective action or other change request(s)</li>
				<li class='content-item-rita'>Influence factors that cause change </li>
				<li class='content-item-rita'>Request changes (4)</li>
				<li class='content-item-rita'>Perform integrated change control</li>
				<li class='content-item-rita'>Approve or reject changes</li>
				<li class='content-item-rita'>Update project management plan & project documents</li>
				<li class='content-item-rita'>Inform stakeholders of all change request results</li>
				<li class='content-item-rita'>Monitor stakeholder engagement</li>
				<li class='content-item-rita'>Confirm configuration compliance</li>
				<li class='content-item-rita'>Create forecasts</li>
				<li class='content-item-rita'>Gain customer’s acceptance of interim deliverables</li>
				<li class='content-item-rita'>Perform quality control</li>
				<li class='content-item-rita'>Perform risk reviews, reassessments, & audits</li>
				<li class='content-item-rita'>Manage reserves</li>
				<li class='content-item-rita'>Manage, evaluate, & close procurements</li>
				<li class='content-item-rita'>Evaluate use of physical resources</li>
			</ul>
		</li>
		<li class='drag-column-rita closing-rita'>
			<span class='drag-column-header closing'><h2 class='headertitle'>CLOSING</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item-rita'>Confirm work is done to requirements</li>
				<li class='content-item-rita'>Complete final procurement closure</li>
				<li class='content-item-rita'>Gain final acceptance of product</li>
				<li class='content-item-rita'>Complete financial closure</li>
				<li class='content-item-rita'>Hand off completed project</li>
				<li class='content-item-rita'>Solicit customer’s feedback about the project</li>
				<li class='content-item-rita'>Complete final performance reporting</li>
				<li class='content-item-rita'>Index & archive records</li>
				<li class='content-item-rita'>Gather final lessons learned & update knowledge bases</li>
			</ul>
		</li>
	</ul>
</div>
				<ul class="collapsible" data-collapsible="expandable">
					<?php $i=0;
					if(isset($arrPG[$key])){
					foreach ($arrPG AS $key=>$value){?>
						<li>
						  <div class="collapsible-header cyan lighten-4"><?php echo $key .". ". $value?></div>
						  <div class="collapsible-body" style="padding:0px 3px 0px 3px"><?php echo $arrRC[$i];?></div>
						</li>
					<?php $i++;} }?>
				</ul>
			</div>
		</li>
	</ul>
</div>
<script src="js/jquery-2.2.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src='js/materialize.min.js'></script>
<script src="js/jquery.flip.js"></script>
<script src="js/term.js"></script>
<script src='js/dragula.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>