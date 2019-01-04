<?php
$arrPG = array(
		"1"=>"Initiating",
		"2"=>"Planning",
		"3"=>"Executing",
		"4"=>"Monitoring & Controlling",
		"5"=>"Closing");
$arrKnowledge= array(
		"4"=>"Project Integration Management",
		"5"=>"Project Scope Management",
		"6"=>"Project Schedule Management",
		"7"=>"Project Cost Management",
		"8"=>"Project Quality Management",
		"9"=>"Project Resource Management",
		"10"=>"Project Communication Management",
		"11"=>"Project Risk Management",
		"12"=>"Project Procurement Management",
		"13"=>"Project Stakeholder Management"
);
$arrKnowledgeCus= array(
		"3"=>"33 Project Documents",
		"4"=>"Project Integration Management",
		"5"=>"Project Scope Management",
		"6"=>"Project Schedule Management",
		"7"=>"Project Cost Management",
		"8"=>"Project Quality Management",
		"9"=>"Project Resource Management",
		"10"=>"Project Communication Management",
		"11"=>"Project Risk Management",
		"12"=>"Project Procurement Management",
		"13"=>"Project Stakeholder Management"
);
$arrRC = array("Select project manager
<br>Determine company culture & existing systems
<br>Collect processes, procedures, & historical information
<br>Divide large projects into phases or smaller projects
<br>Understand business case & benefits management plan
<br>Uncover initial requirements, assumptions, risks, constraints & existing agreements
<br>Assess project & product feasibility within the given constraints
<br>Create measurable objectives & success criteria
<br>Develop project charter
<br>Identify stakeholders & determine their expectations, interest, influence, & impact
<br>Request changes (1)
<br>Develop assumption log
<br>Develop stakeholder register",
	"Determine development approach, life cycle, & how you will plan for each knowledge area
<br>Define & prioritize requirements
<br>Create project scope statement
<br>Assess what to purchase & create procurement documents
<br>Determine planning team
<br>Create WBS & WBS dictionary
<br>Create activity list
<br>Create network diagram
<br>Estimate resource requirements
<br>Estimate activity durations & costs
<br>Determine critical path
<br>Develop schedule
<br>Develop budget
<br>Determine quality standards, processes, & metrics
<br>Determine team charter & all roles & responsibilities
<br>Plan communications & stakeholder engagement
<br>Perform risk identification, qualitative & quantitative risk analysis, & risk response planning
<br>Go back - iterations
<br>Finalize procurement strategy & documents
<br>Create change & configuration management plans
<br>Finalize all management plans
<br>Develop realistic & sufficient project management plan & baselines
<br>Gain formal approval of the plan
<br>Hold kickoff meeting
<br>Request changes (2)",
	"Execute work according to the project management plan
<br>Produce product deliverables (product scope)
<br>Gather work performance data
<br>Request changes (3)
<br>Implement only approved changes
<br>Continuously improve, perform progressive elaboration
<br>>Follow processes
<br>Determine whether quality plan & processes are correct & effective
<br>Perform quality audits & issue quality report
<br>>Acquire final team & physical resources
<br>Manage people
<br>Evaluate team & individual performance; provide training
<br>Hold team-building activities
<br>Give recognition & rewards
<br>Use issue logs
<br>Facilitate conflict resolution
<br>Release resources as work is completed		
<br>Send & receive information & solicit feedback
<br>Report on project performance
<br>Facilitate stakeholder engagement & manage expectations
<br>Hold meetings
<br>Evaluate sellers, negotiate & contract with sellers
<br>>Use & share project knowledge
<br>Execute contingency plans
<br>Update project management plan & project doc",
	"Take action to monitor & control the project
<br>Measure performance against performance measurement baseline
<br>Measure performance against other metrics in the project management plan
<br>Analyze & evaluate data & performance
<br>Determine if variances warrant a corrective action or other change request(s)
<br>Influence factors that cause change 
<br>Request changes (4)
<br>Perform integrated change control
<br>Approve or reject changes
<br>Update project management plan & project documents
<br>Inform stakeholders of all change request results
<br>Monitor stakeholder engagement
<br>Confirm configuration compliance
<br>Create forecasts
<br>Gain customer’s acceptance of interim deliverables
<br>Perform quality control
<br>Perform risk reviews, reassessments, & audits
<br>Manage reserves
<br>Manage, evaluate, & close procurements
<br>Evaluate use of physical resources",
	"Confirm work is done to requirements
<br>Complete final procurement closure
<br>Gain final acceptance of product
<br>Complete financial closure
<br>Hand off completed project
<br>Solicit customer’s feedback about the project
<br>Complete final performance reporting
<br>Index & archive records
<br>Gather final lessons learned & update knowledge bases	"
		);
$arrITTO = array(
		"1"=>array(
			array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management</b><br>4.1 Develop Project Charter<br />","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'><b>1. Business documents</b><br><i class='tiny material-icons'>add</i>Business case<br><i class='tiny material-icons'>add</i>Benefits Management Plan</li>
				<li class='content-item'>2. Agreements</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering</li>
				<li class='content-item'>3. Interpersonal and team skills</li>
				<li class='content-item'>4. Meeting</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project Charter</li>
				<li class='content-item'>2. Assumption log</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"purple darken-1", "process"=>"13. Project Stakeholder Management<br></b>13.1 Identify Stakeholders","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Business documents
				<br><i class='tiny material-icons'>add</i>Business case
				<br><i class='tiny material-icons'>add</i>Benefits management plan</li>
				<li class='content-item'>3. Project management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>4. Project documents
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Requirements documentation</li>
				<li class='content-item'>5. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>6. Enterprise environmental factors</li>
				<li class='content-item'>7. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Questionnaire and surveys
				<br><i class='tiny material-icons'>add</i>Brainstorming</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Stakeholder analysis
				<br><i class='tiny material-icons'>add</i>Document analysis</li>
				<li class='content-item'>4. Data representation
				<br><i class='tiny material-icons'>add</i>Stakeholder mapping/representation</li>
				<li class='content-item'>5. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Stakeholder register</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Requirement management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>")
		),
		"2"=>array(
			array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management<br></b>4.2 Develop Project Management Plan","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project Charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Outputs from other processes</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Brainstorming
				<br><i class='tiny material-icons'>add</i>Checklists
				<br><i class='tiny material-icons'>add</i>Focus groups
				<br><i class='tiny material-icons'>add</i>Interviews</li>
				<li class='content-item'>3. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Conflict Management
				<br><i class='tiny material-icons'>add</i>Facilitation
				<br><i class='tiny material-icons'>add</i>Meeting Management</li>
				<li class='content-item'>4. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project Management Plan</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-blue darken-1", "process"=>"<b>5. Project Scope Management<br></b>5.1 Plan Scope Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Project life cycle description
				<br><i class='tiny material-icons'>add</i>Development approach</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
<li class='content-item'>2. Data analysis
<br><i class='tiny material-icons'>add</i>Alternative analysis</li>
<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Scope management plan</li>
<li class='content-item'>2. Requirements management plan</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-blue darken-1", "process"=>"<b>5. Project Scope Management<br></b>5.2 Collect Requirements","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'><b>2. Project management plan</b>
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Requirements management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder management plan</li>
				<li class='content-item'><b>3. Project documents</b>
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'><b>4. Business documents</b>
				<br><i class='tiny material-icons'>add</i>Business case</li>
				<li class='content-item'>5. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>6. Enterprise environmental factors</li>
				<li class='content-item'>7. Organizational process assets </li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'><b>2. Data gathering</b>
				<br><i class='tiny material-icons'>add</i>Brainstorming
				<br><i class='tiny material-icons'>add</i>Interviews
				<br><i class='tiny material-icons'>add</i>Focus group
				<br><i class='tiny material-icons'>add</i>Questionnaires and survey
				<br><i class='tiny material-icons'>add</i>Benchmarking</li>
				<li class='content-item'><b>3. Data analysis</b></li>
				<br><i class='tiny material-icons'>add</i>Document analysis</li>
				<li class='content-item'><b>4. Decision making</b>
				<br><i class='tiny material-icons'>add</i>Voting
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis</li>
				<li class='content-item'><b>5. Data representation</b>
				<br><i class='tiny material-icons'>add</i>Affinity diagrams
				<br><i class='tiny material-icons'>add</i>Mind mapping</li>
				<li class='content-item'>6. Interpersonal and team skill
				<br><i class='tiny material-icons'>add</i>Nominal group techique
				<br><i class='tiny material-icons'>add</i>Observation/Conversation
				<br><i class='tiny material-icons'>add</i>Facilitation</li>
				<li class='content-item'>7. Context diagram</li>
				<li class='content-item'>8. Prototypes</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Requirements documentation</li>
				<li class='content-item'>2. Requirements traceability matrix</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-blue darken-1", "process"=>"<b>5. Project Scope Management<br></b>5.3 Define Scope","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Scope management plan</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternatives analysis</li>
				<li class='content-item'>3. Decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis</li>
				<li class='content-item'>4. Interpersonal and team skill</li>
				<li class='content-item'><i class='tiny material-icons'>add</i>Facilitation</li>
				<li class='content-item'>5. Product analysis</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project scope statement</li>
				<li class='content-item'>2. Project document updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
			</ul>
		</li>
	</ul>
</div>

"),
			array("color"=>"light-blue darken-1", "process"=>"<b>5. Project Scope Management<br></b>5.4 Create WBS","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan<br><i class='tiny material-icons'>add</i>Scope management plan</li>
				<li class='content-item'>2. Project documents<br><i class='tiny material-icons'>add</i>Project scope statement<br><i class='tiny material-icons'>add</i>Requirements documentation</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Decomposition</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Scope Baseline</li>
				<li class='content-item'>2. Project documents updates<br><i class='tiny material-icons'>add</i>Assumption log<br><i class='tiny material-icons'>add</i>Requirements documentation</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"teal accent-4", "process"=>"<b>6. Project Schedule Management<br></b>6.1 Plan Schedule Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Development approach</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis</li>
				<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Schedule management plan</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"teal accent-4", "process"=>"<b>6. Project Schedule Management<br></b>6.2 Define Activities","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Enterprise environmental factors</li>
				<li class='content-item'>3. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Decomposition</li>
				<li class='content-item'>3. Rolling wave planning</li>
				<li class='content-item'>4. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Activity list</li>
				<li class='content-item'>2. Activity attributes</li>
				<li class='content-item'>3. Milestone list</li>
				<li class='content-item'>4. Change request</li>
				<li class='content-item'>5. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"teal accent-4", "process"=>"<b>6. Project Schedule Management<br></b>6.3 Sequence Activities","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project document
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Milestone list</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Precedence diagramming method</li>
				<li class='content-item'>2. Dependency determination and integration</li>
				<li class='content-item'>3. Leads and lags</li>
				<li class='content-item'>4. Project management information system</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project schedule network diagram</li>
				<li class='content-item'>2. Project documents updates
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Assumption list
				<br><i class='tiny material-icons'>add</i>Milestone list</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"teal accent-4", "process"=>"<b>6. Project Schedule Management<br></b>6.4 Estimate Activity Durations","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Project team assignment
				<br><i class='tiny material-icons'>add</i>Resource breakdown structure
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Resources requirements
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Analogous estimating</li>
				<li class='content-item'>3. Parametric estimating</li>
				<li class='content-item'>4. Three-point estimating</li>
				<li class='content-item'>5. Bottom-up estimating</li>
				<li class='content-item'>6. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternative analysis
				<br><i class='tiny material-icons'>add</i>Reserve analysis</li>
				<li class='content-item'>7. Decision making</li>
				<li class='content-item'>8. Meeting</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Duration estimates</li>
				<li class='content-item'>2. Basis of estimates</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"teal accent-4", "process"=>"<b>6. Project Schedule Management<br></b>6.5 Develop Schedule","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Duration estimates
				<br><i class='tiny material-icons'>add</i>Lesson learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Project schedule network diagram
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>3. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Schedule network analysis</li>
				<li class='content-item'>2. Critical path method</li>
				<li class='content-item'>3. Resource optimization</li>
				<li class='content-item'>4. Data analysis
				<br><i class='tiny material-icons'>add</i>What-if scenario analysis
				<br><i class='tiny material-icons'>add</i>Simulation</li>
				<li class='content-item'>5. Leads and lags</li>
				<li class='content-item'>6. Schedule compression</li>
				<li class='content-item'>7. Project management information system</li>
				<li class='content-item'>8. Agile release planning</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Schedule baseline</li>
				<li class='content-item'>2. Project schedule </li>
				<li class='content-item'>3. Schedule data</li>
				<li class='content-item'>4. Project calendars</li>
				<li class='content-item'>5. Change request</li>
				<li class='content-item'>6. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>7. Project documents updates
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Duration estimates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"purple accent-2", "process"=>"<b>7. Project Cost Management<br></b>7.1 Plan Cost Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis</li>
				<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Cost management plan</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"purple accent-2", "process"=>"<b>7. Project Cost Management<br></b>7.2 Estimate Costs","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Cost management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Analogous estimating</li>
				<li class='content-item'>3. Parametric estimating</li>
				<li class='content-item'>4. Bottom-up estimating</li>
				<li class='content-item'>5. Three-point estimating</li>
				<li class='content-item'>6. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternative analysis
				<br><i class='tiny material-icons'>add</i>Reserve analysis
				<br><i class='tiny material-icons'>add</i>Cost of quality</li>
				<li class='content-item'>7. Project management information system</li>
				<li class='content-item'>8. Decision making
				<br><i class='tiny material-icons'>add</i>Voting</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Cost estimates</li>
				<li class='content-item'>2. Basis of estimates</li>
				<li class='content-item'>3. Project document updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"purple accent-2", "process"=>"<b>7. Project Cost Management<br></b>7.3 Determine Budget","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Cost management plan 
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Cost estimates
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>3. Business documents
				<br><i class='tiny material-icons'>add</i>Business case
				<br><i class='tiny material-icons'>add</i>Benefit management plan</li>
				<li class='content-item'>4. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Cost aggregation</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Reserve analysis</li>
				<li class='content-item'>4. Historical information review</li>
				<li class='content-item'>5. Funding limit reconciliation</li>
				<li class='content-item'>6. Financing</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Cost baseline</li>
				<li class='content-item'>2. Project funding requirements</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Cost estimates
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"pink lighten-3", "process"=>"<b>8. Project Quality Management<br></b>8.1 Plan Quality Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Requirements management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Benchmarking
				<br><i class='tiny material-icons'>add</i>Brainstorming
				<br><i class='tiny material-icons'>add</i>Interviews</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Cost-benefit analysis
				<br><i class='tiny material-icons'>add</i>Cost of quality</li>
				<li class='content-item'>4. Decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis</li>
				<li class='content-item'>5. Data representation
				<br><i class='tiny material-icons'>add</i>Flowcharts
				<br><i class='tiny material-icons'>add</i>Logical data model
				<br><i class='tiny material-icons'>add</i>Matrix diagrams
				<br><i class='tiny material-icons'>add</i>Mind mappings</li>
				<li class='content-item'>6. Test and inspection planning</li>
				<li class='content-item'>7. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Quality management plan</li>
				<li class='content-item'>2. Quality metrics</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-green", "process"=>"<b>9. Project Resource Management<br></b>9.1 Plan Resource Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Project schedule 
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data representation
				<br><i class='tiny material-icons'>add</i>Hierarchical charts
				<br><i class='tiny material-icons'>add</i>Responsibility assignment matrix
				<br><i class='tiny material-icons'>add</i>Text-oriented format</li>
				<li class='content-item'>3. Organization theory</li>
				<li class='content-item'>4. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Resource management plan</li>
				<li class='content-item'>2. Team charter</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-green", "process"=>"<b>9. Project Resource Management<br></b>9.2 Estimate Activity Resources","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Cost estimates
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Bottom-up estimating</li>
				<li class='content-item'>3. Analogous estimating</li>
				<li class='content-item'>4. Parametric estimating</li>
				<li class='content-item'>5. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternative analysis</li>
				<li class='content-item'>6. Project management information system</li>
				<li class='content-item'>7. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Resource requirements</li>
				<li class='content-item'>2. Basis of estimates</li>
				<li class='content-item'>3. Resource breakdown structure</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Activity attributes
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"red lighten-1", "process"=>"<b>10. Project Communication Management<br></b>10.1 Plan Communications Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Communication requirement analysis</li>
				<li class='content-item'>3. Communication technology</li>
				<li class='content-item'>3. Communication models</li>
				<li class='content-item'>4. Communication method</li>
				<li class='content-item'>5. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Communication styles assessment
				<br><i class='tiny material-icons'>add</i>Political awareness
				<br><i class='tiny material-icons'>add</i>Cultural awareness </li>
				<li class='content-item'>6. Data representation
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement assessment matrix</li>
				<li class='content-item'>7. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Communication management plan</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.1 Plan Risk Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>All components</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Stakeholder analysis</li>
				<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Risk management plan</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.2 Identify Risks","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Requirement management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Cost management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Cost estimates
				<br><i class='tiny material-icons'>add</i>Durations estimates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>4. Procurement documentation<br /><small>Output of 12.1 Plan Procurement Management</small></li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Brainstorming
				<br><i class='tiny material-icons'>add</i>Check lists
				<br><i class='tiny material-icons'>add</i>Interviews</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Root cause analysis
				<br><i class='tiny material-icons'>add</i>Assumption and constraints analysis
				<br><i class='tiny material-icons'>add</i>SWOT analysis
				<br><i class='tiny material-icons'>add</i>Document analysis</li>
				<li class='content-item'>4. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Facilitation</li>
				<li class='content-item'>5. Prompt list</li>
				<li class='content-item'>6. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Risk register</li>
				<li class='content-item'>2. Risk report</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.3 Perform Qualitative Risk Analysis","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>

			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Interviews</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Risk data quality assessment
				<br><i class='tiny material-icons'>add</i>Risk probability and impact assessment
				<br><i class='tiny material-icons'>add</i>Assessment of others risk parameters</li>
				<li class='content-item'>4. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Facilitation</li>
				<li class='content-item'>5. Risk categorization</li>
				<li class='content-item'>6. Data representation
				<br><i class='tiny material-icons'>add</i>Probability and impact matrix
				<br><i class='tiny material-icons'>add</i>Hierarchical charts</li>
				<li class='content-item'>7. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Risk register</li>
				<li class='content-item'>2. Project document updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.4 Perform Quantitative Risk Analysis","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Cost estimates
				<br><i class='tiny material-icons'>add</i>Cost forecasts
				<br><i class='tiny material-icons'>add</i>Duration estimates
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report
				<br><i class='tiny material-icons'>add</i>Schedule forecasts</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Interviews</li>
				<li class='content-item'>3. Interpersonal and team skill
				<br><i class='tiny material-icons'>add</i>Facilitation</li>
				<li class='content-item'>4. Representation of uncertainty</li>
				<li class='content-item'>5. Data analysis
				<br><i class='tiny material-icons'>add</i>Simulations
				<br><i class='tiny material-icons'>add</i>Sensitivity analysis
				<br><i class='tiny material-icons'>add</i>Decision tree analysis
				<br><i class='tiny material-icons'>add</i>Influence diagram</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project documents updates
				<br><i class='tiny material-icons'>add</i>Risk report</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.5 Plan Risk Responses","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Project team assignments
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Interviews</li>
				<li class='content-item'>3. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Facilitation</li>
				<li class='content-item'>4. Strategies for threats</li>
				<li class='content-item'>5. Strategies for opportunities</li>
				<li class='content-item'>6. Contingent response strategies</li>
				<li class='content-item'>7. Strategies for overall project risk</li>
				<li class='content-item'>8. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternatives analysis
				<br><i class='tiny material-icons'>add</i>Cost-benefit analysis</li>
				<li class='content-item'>9. Decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Change request</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Schedule management plan 
				<br><i class='tiny material-icons'>add</i>Cost management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Procurement management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Cost forecasts
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Project team assignments
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-3", "process"=>"<b>12. Project Procurement Management<br></b>12.1 Plan Procurement Management","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Business documents
				<br><i class='tiny material-icons'>add</i>Benefits management plan</li>
				<li class='content-item'>3. Project management plan
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>4. Project documents
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Project team assignments
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data  gathering
				<br><i class='tiny material-icons'>add</i>Market research</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Make-or-buy analysis</li>
				<li class='content-item'>4. Source selection analysis</li>
				<li class='content-item'>5. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Procurement management plan</li>
				<li class='content-item'>2. Procurement strategy</li>
				<li class='content-item'>3. Bid documents</li>
				<li class='content-item'>4. Procurement statement of work</li>
				<li class='content-item'>5. Source selection criteria</li>
				<li class='content-item'>6. Make-or-buy decisions</li>
				<li class='content-item'>7. Independent cost estimates</li>
				<li class='content-item'>8. Change request</li>
				<li class='content-item'>9. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>10. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"purple darken-1", "process"=>"13 Project Stakeholder Management<br></b>13.2 Plan Stakeholder Engagement","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Project schedule 
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>4. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data gathering
				<br><i class='tiny material-icons'>add</i>Benchmarking</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Assumption and constraint analysis
				<br><i class='tiny material-icons'>add</i>Root cause analysis</li>
				<li class='content-item'>4. Decision making
				<br><i class='tiny material-icons'>add</i>Prioritization /ranking</li>
				<li class='content-item'>5. Data representation
				<br><i class='tiny material-icons'>add</i>Mind mapping
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement assessment matrix</li>
				<li class='content-item'>6. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Stakeholder engagement plan</li>
			</ul>
		</li>
	</ul>
</div>"),
		),
		"3"=>array(
			array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management<br></b>4.3 Direct and Manage Project Work","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project Management Plan
				<br><i class='tiny material-icons'>add</i>Any component</li>
				<li class='content-item'>2. Project Documents
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Lesson learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Project communications
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Requirement traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
				<li class='content-item'>3. Approved change request<br /><small>Output of 4.6 Perform Integrated Change Control</small></li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Project management information system</li>
				<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Deliverables</li>
				<li class='content-item'>2. Work performance data</li>
				<li class='content-item'>3. Issue log</li>
				<li class='content-item'>4. Change request</li>
				<li class='content-item'>5. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Any component</li>
				<li class='content-item'>6. Project documents updates
				<br><i class='tiny material-icons'>add</i>Activity list
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirement documentation
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>7. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management<br></b>4.4 Manage Project Knowledge","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>All components</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lesson learned register
				<br><i class='tiny material-icons'>add</i>Project team assignment
				<br><i class='tiny material-icons'>add</i>Resource break structure
				<br><i class='tiny material-icons'>add</i>Source selection criteria 
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Deliverables<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Knowledge management</li>
				<li class='content-item'>3. Information management</li>
				<li class='content-item'>4. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Active listening
				<br><i class='tiny material-icons'>add</i>Facilitation
				<br><i class='tiny material-icons'>add</i>Leadership
				<br><i class='tiny material-icons'>add</i>Networking
				<br><i class='tiny material-icons'>add</i>Political awareness</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Lessons learned register</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Any component</li>
				<li class='content-item'>3. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"pink lighten-3", "process"=>"<b>8. Project Quality Management<br></b>8.2 Manage Quality","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Quality control measurement
				<br><i class='tiny material-icons'>add</i>Quality metrics
				<br><i class='tiny material-icons'>add</i>Risk report</li>
				<li class='content-item'>3. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data gathering
				<br><i class='tiny material-icons'>add</i>Checklists</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternative analysis
				<br><i class='tiny material-icons'>add</i>Document analysis 
				<br><i class='tiny material-icons'>add</i>Process analysis
				<br><i class='tiny material-icons'>add</i>Root cause analysis</li>
				<li class='content-item'>3. Decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis</li>
				<li class='content-item'>4. Data representation
				<br><i class='tiny material-icons'>add</i>Affinity diagrams
				<br><i class='tiny material-icons'>add</i>Cause-and-effects diagrams
				<br><i class='tiny material-icons'>add</i>Flowcharts
				<br><i class='tiny material-icons'>add</i>Histograms
				<br><i class='tiny material-icons'>add</i>Matrix diagrams
				<br><i class='tiny material-icons'>add</i>Scatter diagrams</li>
				<li class='content-item'>5. Audits</li>
				<li class='content-item'>6. Design for X</li>
				<li class='content-item'>7. Problem solving</li>
				<li class='content-item'>8. Quality improvement method</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Quality report</li>
				<li class='content-item'>2. Test and evaluation reports</li>
				<li class='content-item'>3. Change request</li>
				<li class='content-item'>4. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline 
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>5. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-green", "process"=>"<b>9. Project Resource Management<br></b>9.3 Acquire Resources","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Procurement management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decison analysis</li>
				<li class='content-item'>2. Interpersonal and team skill
				<br><i class='tiny material-icons'>add</i>Negotiation</li>
				<li class='content-item'>3. Pre-assignment</li>
				<li class='content-item'>4. Virtual team</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Physical resource assignment</li>
				<li class='content-item'>2. Project team assignment</li>
				<li class='content-item'>3. Resource calendars</li>
				<li class='content-item'>4. Change request</li>
				<li class='content-item'>5. Project management updates
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>6. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Resource breakdown structure
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>7. Enterprise environmental factors updates</li>
				<li class='content-item'>8. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-green", "process"=>"<b>9. Project Resource Management<br></b>9.4 Develop Team","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Project team assignments
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Team charter</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Colocation</li>
				<li class='content-item'>2. Virtual teams</li>
				<li class='content-item'>3. Communication technology</li>
				<li class='content-item'>4. Interpersonal and team skill
				<br><i class='tiny material-icons'>add</i>Conflict management
				<br><i class='tiny material-icons'>add</i>Influencing
				<br><i class='tiny material-icons'>add</i>Motivation
				<br><i class='tiny material-icons'>add</i>Negotiation
				<br><i class='tiny material-icons'>add</i>Team building</li>
				<li class='content-item'>5. Recognition and rewards</li>
				<li class='content-item'>6. Training</li>
				<li class='content-item'>7. Individual and team assessments</li>
				<li class='content-item'>8. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Team performance assessments</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Resource management plan</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Project team assignments
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Team charter</li>
				<li class='content-item'>4. Enterprise environmental factors updates</li>
				<li class='content-item'>5. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"light-green", "process"=>"<b>9. Project Resource Management<br></b>9.5 Manage Team","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project team assignment
				<br><i class='tiny material-icons'>add</i>Team charter</li>
				<li class='content-item'>3. Work performance report<br /><small>Output of 4.5 Monitor and Control Project Work</small></li>
				<li class='content-item'>4. Team performance assessment<br /><small>Output of 9.4 Develop Team</small></li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Conflict management
				<br><i class='tiny material-icons'>add</i>Decision making
				<br><i class='tiny material-icons'>add</i>Emotional intelligence
				<br><i class='tiny material-icons'>add</i>Influencing
				<br><i class='tiny material-icons'>add</i>Leadership</li>
				<li class='content-item'>2. Project management information system</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Change request</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Resource management plan 
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project team assignments</li>
				<li class='content-item'>4. Enterprise environmental factors updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"red lighten-1", "process"=>"<b>10. Project Communication Management<br></b>10.2 Manage Communications","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Quality report
				<br><i class='tiny material-icons'>add</i>Risk report
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Work performance report<br /><small>Output of 4.5 Monitor and Control Project Work</small></li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Communication technology</li>
				<li class='content-item'>2. Communication methods</li>
				<li class='content-item'>3. Communication skills
				<br><i class='tiny material-icons'>add</i>Communication competence
				<br><i class='tiny material-icons'>add</i>Feedback
				<br><i class='tiny material-icons'>add</i>Nonverbal
				<br><i class='tiny material-icons'>add</i>Presentations</li>
				<li class='content-item'>4. Project management information system</li>
				<li class='content-item'>5. Project report</li>
				<li class='content-item'>6. Interpersonal and team skill 
				<br><i class='tiny material-icons'>add</i>Active listening
				<br><i class='tiny material-icons'>add</i>Conflict management
				<br><i class='tiny material-icons'>add</i>Cultural awareness
				<br><i class='tiny material-icons'>add</i>Meeting management
				<br><i class='tiny material-icons'>add</i>Networking
				<br><i class='tiny material-icons'>add</i>Political awareness</li>
				<li class='content-item'>7. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project communications</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>4. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.6 Implement Risk Responses","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan</li>
				<li class='content-item'>2. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
				<li class='content-item'>3. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Influencing</li>
				<li class='content-item'>3. Project management information system</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Change request</li>
				<li class='content-item'>2. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project team assignments
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"orange lighten-3", "process"=>"<b>12. Project Procurement Management<br></b>12.2 Conduct Procurements","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Requirement management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Procurement management plan
				<br><i class='tiny material-icons'>add</i>Configuration management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Requirement documentation
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Procurement documentation</li>
				<li class='content-item'>4. Seller proposals</li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Advertising</li>
				<li class='content-item'>3. Bidder conferences</li>
				<li class='content-item'>4. Data analysis
				<br><i class='tiny material-icons'>add</i>Proposal evaluation</li>
				<li class='content-item'>5. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Negotiation</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Selected seller</li>
				<li class='content-item'>2. Agreements</li>
				<li class='content-item'>3. Change requests</li>
				<li class='content-item'>4. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Requirement management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Procurement management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>5. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
	</ul>
</div>"),
			array("color"=>"purple darken-1", "process"=>"13 Project Stakeholder Management<br></b>13.3 Manage Stakeholder Engagement","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Communications management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan
				<br><i class='tiny material-icons'>add</i>Change management plan
				</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Stakeholder register
				</li>
				<li class='content-item'>3. Enterprise environmental factors</li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Communication skills
				<br><i class='tiny material-icons'>add</i>Feedback
				</li>
				<li class='content-item'>3. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Confict management
				<br><i class='tiny material-icons'>add</i>Culture awareness
				<br><i class='tiny material-icons'>add</i>Negotiation
				<br><i class='tiny material-icons'>add</i>Observation/Conversation
				<br><i class='tiny material-icons'>add</i>Political awareness
				</li>
				<li class='content-item'>4. Ground rules</li>
				<li class='content-item'>5. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Change requests</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Communication Management Plan
				<br><i class='tiny material-icons'>add</i>Stakeholder egagement plan
				</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Isue log
				<br><i class='tiny material-icons'>add</i>Lession learnt register
				<br><i class='tiny material-icons'>add</i>Stakeholder register
				</li>
			</ul>
		</li>
	</ul>
</div>"),
		),
		"4"=>array(
		array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management<br></b>4.5 Monitor and Control Project Work","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Any components</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Cost forecasts
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Quality reports
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report
				<br><i class='tiny material-icons'>add</i>Schedule forecasts</li>
				<li class='content-item'>3. Work performance information</li>
				<li class='content-item'>4. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternatives analysis
				<br><i class='tiny material-icons'>add</i>Cost-benefit analysis
				<br><i class='tiny material-icons'>add</i>Earned value analysis
				<br><i class='tiny material-icons'>add</i>Root cause analysis
				<br><i class='tiny material-icons'>add</i>Trend analysis
				<br><i class='tiny material-icons'>add</i>Variance analysis</li>
				<li class='content-item'>3. Decision making</li>
				<li class='content-item'>4. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance reports</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Any components</li>
				<li class='content-item'>4. Project document updates
				<br><i class='tiny material-icons'>add</i>Cost forecasts
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Schedule forecasts</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management<br></b>4.6 Perform Integrated Change Control","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Change management plan
				<br><i class='tiny material-icons'>add</i>Configuration management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk report</li>
				<li class='content-item'>3. Work performance report<br /><small>Output of 4.5 Monitor and Control Project Work</small></li>
				<li class='content-item'>4. Change request<br /><small>Output of 4.5 Monitor and Control Project Work</small></li>
				<li class='content-item'>5. Enterprise environmental factors</li>
				<li class='content-item'>6. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Change control tools</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternatives analysis
				<br><i class='tiny material-icons'>add</i>Cost-benefit analysis</li>
				<li class='content-item'>4. Decision making</li>
				<br><i class='tiny material-icons'>add</i>Voting
				<br><i class='tiny material-icons'>add</i>Autocratic decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis</li>
				<li class='content-item'>5. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Approved change request</li>
				<li class='content-item'>2. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Any components</li>
				<li class='content-item'>3. Project documents updates
				<br><i class='tiny material-icons'>add</i>Change log</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"light-blue darken-1", "process"=>"<b>5. Project Scope Management<br></b>5.5 Validate Scope","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Requirement management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Quality report
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix</li>
				<li class='content-item'>3. Verified deliverables<br /><small>Output of 8.3 Control Quality</small></li>
				<li class='content-item'>4. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Inspection</li></li>
				<li class='content-item'>2. Decision making
				<br><i class='tiny material-icons'>add</i>Voting</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Accepted deliverables</li>
				<li class='content-item'>2. Work performance information</li>
				<li class='content-item'>3. Change request</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirements documentation 
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"light-blue darken-1", "process"=>"<b>5. Project Scope Management<br></b>5.6 Control Scope","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Requirements management plan
				<br><i class='tiny material-icons'>add</i>Change management plan
				<br><i class='tiny material-icons'>add</i>Configuration management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Performance measurement baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix</li>
				<li class='content-item'>3. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data analysis
				<br><i class='tiny material-icons'>add</i>Variance analysis
				<br><i class='tiny material-icons'>add</i>Trend analysis</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Scope management plan
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline
				<br><i class='tiny material-icons'>add</i>Performance measurement baseline</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"teal accent-4", "process"=>"<b>6. Project Schedule Management<br></b>6.6 Control Schedule","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Scope baseline
				<br><i class='tiny material-icons'>add</i>Performance measurement baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lesson learned register
				<br><i class='tiny material-icons'>add</i>Project calendars
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Schedule data</li>
				<li class='content-item'>3. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data analysis
				<br><i class='tiny material-icons'>add</i>Earned value analysis
				<br><i class='tiny material-icons'>add</i>Iteration burndown chart
				<br><i class='tiny material-icons'>add</i>Performance reviews
				<br><i class='tiny material-icons'>add</i>Trend analysis
				<br><i class='tiny material-icons'>add</i>Variance analysis
				<br><i class='tiny material-icons'>add</i>What-if scenario analysis</li>
				<li class='content-item'>2. Critical path method</li>
				<li class='content-item'>3. Project management information system</li>
				<li class='content-item'>4. Resource optimization</li>
				<li class='content-item'>5. Leads and lags</li>
				<li class='content-item'>6. Schedule compression</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Schedule forecasts</li>
				<li class='content-item'>3. Change request</li>
				<li class='content-item'>4. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Schedule management plan
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline
				<br><i class='tiny material-icons'>add</i>Performance measurement baseline</li>
				<li class='content-item'>5. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project schedule 
				<br><i class='tiny material-icons'>add</i>Resource calendars
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Schedule data</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"purple accent-2", "process"=>"<b>7. Project Cost Management<br></b>7.4 Control Costs","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Cost management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline
				<br><i class='tiny material-icons'>add</i>Performance measurement baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register</li>
				<li class='content-item'>3. Project funding requirements<br /><small>Output of 7.3 Determine Budget</small></li>
				<li class='content-item'>4. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Earned value analysis
				<br><i class='tiny material-icons'>add</i>Variance analysis
				<br><i class='tiny material-icons'>add</i>Trend analysis
				<br><i class='tiny material-icons'>add</i>Reserve analysis</li>
				<li class='content-item'>3. To-complete performance index</li>
				<li class='content-item'>4. Performance management information system</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Cost forecasts</li>
				<li class='content-item'>3. Change request</li>
				<li class='content-item'>4. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Cost management plan
				<br><i class='tiny material-icons'>add</i>Cost baseline
				<br><i class='tiny material-icons'>add</i>Performance measurement baseline</li>
				<li class='content-item'>5. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Basis of estimates
				<br><i class='tiny material-icons'>add</i>Cost estimates
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"pink lighten-3", "process"=>"<b>8. Project Quality Management<br></b>8.3 Control Quality","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Quality management plan
				<br><small>Output of Plan Quality Management</small>
				</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Quality metrics
				<br><small>Output of Plan Quality Management</small>
				<br><i class='tiny material-icons'>add</i>Test and evaluation documents
				<br><small>Output of Manage Quality</small>
				</li>
				<li class='content-item'>3. Approved change requests
				<br><small>Output of Perform Integrated Change Control</small>
				</li>
				<li class='content-item'>4. Deliverables
				<br><small>Output of Direct & Manage Project Work</small>
				</li>
				<li class='content-item'>5. Work performance data
				<br><small>Output of Direct & Manage Project Work</small>
				</li>
				<li class='content-item'>6. Enterprise environmental factors</li>
				<li class='content-item'>7. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data gathering
				<br><i class='tiny material-icons'>add</i>Checklists
				<br><i class='tiny material-icons'>add</i>Check sheet
				<br><i class='tiny material-icons'>add</i>Statistical sampling
				<br><i class='tiny material-icons'>add</i>Questionnaires and surveys</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Performance reviews
				<br><i class='tiny material-icons'>add</i>Root cause analysis</li>
				<li class='content-item'>3. Inspection</li>
				<li class='content-item'>4. Testing/product evaluation</li>
				<li class='content-item'>5. Data representation
				<br><i class='tiny material-icons'>add</i>Cause-and-effect diagrams
				<br><i class='tiny material-icons'>add</i>Control chart
				<br><i class='tiny material-icons'>add</i>Histogram
				<br><i class='tiny material-icons'>add</i>Scatter diagrams</li>
				<li class='content-item'>6. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Quality control measurement</li>
				<li class='content-item'>2. Verified deliverables</li>
				<li class='content-item'>3. Work performance information</li>
				<li class='content-item'>4. Change request</li>
				<li class='content-item'>5. Project management updates
				<br><i class='tiny material-icons'>add</i>Quality management plan</li>
				<li class='content-item'>6. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lesson learned register
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Test and evaluation documents</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"light-green", "process"=>"<b>9. Project Resource Management<br></b>9.6 Control Resources","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Physical resource assignments
				<br><i class='tiny material-icons'>add</i>Project schedule
				<br><i class='tiny material-icons'>add</i>Resource breakdown structure
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Risk register</li>
				<li class='content-item'>3. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternatives analysis
				<br><i class='tiny material-icons'>add</i>Cost-benefit analysis
				<br><i class='tiny material-icons'>add</i>Performance reviews
				<br><i class='tiny material-icons'>add</i>Trend analysis</li>
				<li class='content-item'>2. Problem solving</li>
				<li class='content-item'>3. Interpersonal and team skill
				<br><i class='tiny material-icons'>add</i>Negotiation
				<br><i class='tiny material-icons'>add</i>Influencing</li>
				<li class='content-item'>4. Project management information system</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Physical resource assignments
				<br><i class='tiny material-icons'>add</i>Resource breakdown structure
				<br><i class='tiny material-icons'>add</i>Risk register</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"red lighten-1", "process"=>"<b>10. Project Communication Management<br></b>10.3 Monitor Communications","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project communications</li>
				<li class='content-item'>3. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Project management information system</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement assessment matrix</li>
				<li class='content-item'>4. Interpersonal and team skill
				<br><i class='tiny material-icons'>add</i>Observation/Conversation</li>
				<li class='content-item'>5. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"orange lighten-1", "process"=>"<b>11. Project Risk Management<br></b>11.7 Monitor Risks","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
				<li class='content-item'>3. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Work performance reports<br /><small>Output of 4.5 Monitor and Control Project Work</small></li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data analysis
				<br><i class='tiny material-icons'>add</i>Technical performance analysis
				<br><i class='tiny material-icons'>add</i>Reserve analysis</li>
				<li class='content-item'>2. Audits</li>
				<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Any component</li>
				<li class='content-item'>4. Organizational process assets updates
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"orange lighten-3", "process"=>"<b>12. Project Procurement Management<br></b>12.3 Control Procurements","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Requirement management plan
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Procurement management plan
				<br><i class='tiny material-icons'>add</i>Change management plan
				<br><i class='tiny material-icons'>add</i>Schedule baseline</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Quality reports
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder reigster</li>
				<li class='content-item'>3. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>4. Procurement documentation<br /><small>Output of 12.1 Plan Procurement Management</small></li>
				<li class='content-item'>5. Approved change requests<br /><small>Output of 4.6 Perform Integrated Change Control</small></li>
				<li class='content-item'>6. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>7. Enterprise environmental factors</li>
				<li class='content-item'>8. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Claims administration</li>
				<li class='content-item'>3. Data analysis
				<br><i class='tiny material-icons'>add</i>Performance reviews
				<br><i class='tiny material-icons'>add</i>Earned value analysis
				<br><i class='tiny material-icons'>add</i>Trend analysis</li>
				<li class='content-item'>4. Inspection</li>
				<li class='content-item'>5. Audits</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Closed procurements</li>
				<li class='content-item'>2. Work performance information</li>
				<li class='content-item'>3. Procurement documentation updates</li>
				<li class='content-item'>4. Change request</li>
				<li class='content-item'>5. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Risk management plan
				<br><i class='tiny material-icons'>add</i>Procurement management plan
				<br><i class='tiny material-icons'>add</i>Schedule baseline
				<br><i class='tiny material-icons'>add</i>Cost baseline</li>
				<li class='content-item'>6. Project documents updates
				<br><i class='tiny material-icons'>add</i>Lesson learned register  
				<br><i class='tiny material-icons'>add</i>Resource requirements
				<br><i class='tiny material-icons'>add</i>Requirements traceability matrix
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>7. Organizational process assets</li>
			</ul>
		</li>
	</ul>
</div>"),
		array("color"=>"purple darken-1", "process"=>"13 Project Stakeholder Management<br></b>13.4 Monitor Stakeholder Engagement","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project management plan
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Communication management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>
				<li class='content-item'>2. Project documents
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Project communications
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
				<li class='content-item'>3. Work performance data<br /><small>Output of 4.3 Direct and Manage Project Work</small></li>
				<li class='content-item'>4. Enterprise environmental factors</li>
				<li class='content-item'>5. Organizational process assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Data analysis
				<br><i class='tiny material-icons'>add</i>Alternatives analysis
				<br><i class='tiny material-icons'>add</i>Root cause analysis
				<br><i class='tiny material-icons'>add</i>Stakeholder analysis</li>
				<li class='content-item'>2. Decision making
				<br><i class='tiny material-icons'>add</i>Multicriteria decision analysis
				<br><i class='tiny material-icons'>add</i>Voting</li>
				<li class='content-item'>3. Data representation
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement assessment matrix</li>
				<li class='content-item'>4. Communication skills
				<br><i class='tiny material-icons'>add</i>Feedback
				<br><i class='tiny material-icons'>add</i>Presentations</li>
				<li class='content-item'>5. Interpersonal and team skills
				<br><i class='tiny material-icons'>add</i>Active listening
				<br><i class='tiny material-icons'>add</i>Cultural awareness
				<br><i class='tiny material-icons'>add</i>Leadership
				<br><i class='tiny material-icons'>add</i>Networking
				<br><i class='tiny material-icons'>add</i>Political awareness</li>
				<li class='content-item'>6. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Work performance information</li>
				<li class='content-item'>2. Change request</li>
				<li class='content-item'>3. Project management plan updates
				<br><i class='tiny material-icons'>add</i>Resource management plan
				<br><i class='tiny material-icons'>add</i>Communications management plan
				<br><i class='tiny material-icons'>add</i>Stakeholder engagement plan</li>	
				<li class='content-item'>4. Project documents updates
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Stakeholder register</li>
			</ul>
		</li>
	</ul>
</div>"),
		),
		"5"=>array(
		array("color"=>"blue-grey darken-1", "process"=>"<b>4. Project Integration Management<br></b>4.7 Close Project or Phase","process_value"=>"<div class='drag-container ritachart'>
	<ul class='drag-list'>
		<li class='drag-column'>
			<span class='drag-column-header'><h2>INPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project charter<br /><small>Output of 4.1 Develop Project Charter</small></li>
				<li class='content-item'>2. Project management plan
				<br><i class='tiny material-icons'>add</i>All components</li>
				<li class='content-item'>3. Project documents
				<br><i class='tiny material-icons'>add</i>Assumption log
				<br><i class='tiny material-icons'>add</i>Change log
				<br><i class='tiny material-icons'>add</i>Issue log
				<br><i class='tiny material-icons'>add</i>Lessons learned register
				<br><i class='tiny material-icons'>add</i>Milestone list
				<br><i class='tiny material-icons'>add</i>Project communications
				<br><i class='tiny material-icons'>add</i>Quality control measurements
				<br><i class='tiny material-icons'>add</i>Quality reports
				<br><i class='tiny material-icons'>add</i>Requirements documentation
				<br><i class='tiny material-icons'>add</i>Risk register
				<br><i class='tiny material-icons'>add</i>Risk report</li>
				<li class='content-item'>4. Accepted deliverables<br /><small>5.5 Validate Scope</small></li>
				<li class='content-item'>5. Business documents
				<br><i class='tiny material-icons'>add</i>Business case
				<br><i class='tiny material-icons'>add</i>Benefit management plan</li>
				<li class='content-item'>6. Agreements<br /><small>Output of 12.2 Conduct Procurements</small></li>
				<li class='content-item'>7. Procurement documentation<br /><small>Output of 12.1 Plan Procurement Management</small></li>
				<li class='content-item'>8. Organizational processes assets</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>TOOLS & TECHNIQUES</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Expert judgment</li>
				<li class='content-item'>2. Data analysis
				<br><i class='tiny material-icons'>add</i>Document analysis
				<br><i class='tiny material-icons'>add</i>Regression analysis
				<br><i class='tiny material-icons'>add</i>Trend analysis
				<br><i class='tiny material-icons'>add</i>Variance analysis</li>
				<li class='content-item'>3. Meetings</li>
			</ul>
		</li>
		<li class='drag-column'>
			<span class='drag-column-header'><h2 class='headertitle'>OUTPUTS</h2></span>
			<ul class='drag-inner-list'>
				<li class='content-item'>1. Project document updated</li>
				<li class='content-item'>2. Final product, service or result transition</li>
				<li class='content-item'>3. Final report</li>
				<li class='content-item'>4. Organizational process assets updates</li>
			</ul>
		</li>
	</ul>
</div>"),
		)
);
$arr = array(	"1"=>"Project Management Fundamental",
				"2"=>"Project Management Framework",
				"3"=>"Project Management Processes",
				"4"=>"Project Integration Management",
				"5"=>"Project Scope Management",
				"6"=>"Project Schedule Management",
				"7"=>"Project Cost Management",
				"8"=>"Project Quality Management",
				"9"=>"Project Resource Management",
				"10"=>"Project Communications Management",
				"11"=>"Project Risk Management",
				"12"=>"Project Procurement Management",
				"13"=>"Project Stakeholder Management",
				"14"=>"Professional & Social Responsibility",
				"15"=>"Tips for Passing the PMP Exam the First Time",
				"16"=>"Tips of Keywords",
				"17"=>"Role of the Project Manager",
				"18"=>"The PMI Code of Ethics and Professional Conduct",
				"19"=>"Memory Sheets");