<!DOCTYPE html>
<html lang="en" class="no-js"> 
	<head> 
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Zotero, research, tool, firefox, extension"/>
		<meta name="description" content="Zotero is a powerful, easy-to-use research tool that 
										  helps you gather, organize, and analyze sources and then 
										  share the results of your research."/>
				
		<title>Zotero | </title>
		<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
		
		<!-- css -->
		<link rel="stylesheet" href="../assets/style.css" 
			type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="../assets/zotero_icons_sprite.css" 
			type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="../build/web-components.css" type="text/css" media="screen" charset="utf-8"/>
		<!-- set jsConfig on window.zoteroConfig -->
		<?php $jsConfig = include('./jsConfig.php');?>
		<script type="text/javascript">
			window.zoteroConfig = <?=json_encode($jsConfig);?>;

			if(!window.Zotero){
				window.Zotero = {};
			}
        </script>
        <script type="text/javascript" charset="utf-8" src="../build/web-components.js"></script>
	</head>
	<body >
		<!-- Header -->
		<header role="banner" class="container">
			<div class="center container">
												
				<h1 id="logohead">
					<a href="/"><img src="../assets/images/theme/zotero.png" alt="Zotero"></a>
				</h1>
			
			<div id="login-links">
				Welcome, <a href="/fcheslack">Faolan C-P</a>
				<a href="https://zotero.live/settings/">Settings</a>
				<a href="https://forums.zotero.live/messages/inbox"><strong>Inbox (8)</strong></a>
				<a href="/download">Download</a>
				<a href="/user/logout/">Log Out</a>
			</div>

			<a href="/settings/storage?ref=usb" class="button" id="purchase-storage-link"><img src="../assets/images/theme/archive.png" /> Upgrade Storage</a>

			<div id="navbar" class="container">
				<nav id="sitenav">
					<ul>
					<li ><a href="/">Home</a></li>
					<li ><a href="https://zotero.live/fcheslack/items">My Library</a></li>
					<li class='selected'><a href="/groups/">Groups</a></li>
					<li ><a href="/people/">People</a></li>
					<li ><a href="/support/">Documentation</a></li>
					<li ><a href="https://forums.zotero.live">Forums</a></li>
					<li ><a href="/getinvolved/">Get Involved</a></li>
					</ul>
				</nav>
					<form action="//zotero.live/search/" class="zform zsearch" id="simple-search">
					<div>
						<input type="text" name="q" size="20" id="header-search-query"/>
						<button class="button clear-field-button" type="reset"><span class="ui-icon ui-icon-circle-close">&nbsp;</span></button>
						<input class="button" type="submit" value="Search">
					</div>
				</form>
			</div>
		</div>
		</header>
		<div id="content">
			<div class="center container">
			<!-- Output the breadcrumb if it's set -->
						
			<!-- Output any stored messages -->
																											
			<!-- hidden area for possible JS messages -->
			<div id="js-message">
				<ul id="js-message-list">
				</ul>
			</div>

			<!-- Output content -->
			<div id="group-show" class="major-col">
				<h1>Group Name</h1>

				<span id="libraryGroupID" title="1"></span>
				<nav class="action-links">
					<ul>
						<!-- group library link -->
						<li><a href="">Group Library</a></li>
						<!-- settings link -->
						<li><a href="">Group Settings</a></li>
					</ul>
				</nav>

				<!-- Recent Items List -->
				<div id="new-group-items">
					<h2>Recently Added Items</h2>
					<div id='react-recentItems'></div>
				</div>

				<h2>Recent Group Discussion</h2>
				<a href="#" id="new-message-link">New Discussion</a>
				<div id="group-message-form" style="display: none;">
					<form enctype="application/x-www-form-urlencoded" accept-charset="utf-8" method="post" class="zform" action="/message/groupcompose"><ol>

						<input name="messageRecipient" value="7" id="messageRecipient" type="hidden">

						<input name="messageType" value="2" id="messageType" type="hidden">

						<input name="previous" value="0" id="previous" type="hidden">

						<input name="redirect" value="/groups/7/narwhal" id="redirect" type="hidden">
						<li><label for="messageSubject">Subject:
						<input name="messageSubject" id="messageSubject" value="" type="text"></label></li>
						<li><label for="messageBody">Message
						<textarea name="messageBody" id="messageBody" rows="10" class="tinymce nolinks" cols="80" style="display: none;" aria-hidden="true"></textarea><span role="application" aria-labelledby="messageBody_voice" id="messageBody_parent" class="mceEditor defaultSkin"><span class="mceVoiceLabel" style="display:none;" id="messageBody_voice">Rich Text Area</span><table role="presentation" id="messageBody_tbl" class="mceLayout" style="width: 100px; height: 100px;" cellspacing="0" cellpadding="0"><tbody><tr role="presentation" class="mceFirst"><td class="mceToolbar mceLeft mceFirst mceLast" role="presentation"><div id="messageBody_toolbargroup" role="group" aria-labelledby="messageBody_toolbargroup_voice" tabindex="-1"><span role="application"><span id="messageBody_toolbargroup_voice" class="mceVoiceLabel" style="display:none;">Toolbar</span><table id="messageBody_toolbar1" class="mceToolbar mceToolbarRow1 Enabled" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" align="" cellspacing="0" cellpadding="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartButton mceFirst"><span><!-- IE --></span></td><td style="position: relative"><a role="button" id="messageBody_bold" href="javascript:;" class="mceButton mceButtonEnabled mce_bold" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_bold_voice" title="Bold (Ctrl+B)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bold"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_bold_voice">Bold (Ctrl+B)</span></a></td><td style="position: relative"><a role="button" id="messageBody_italic" href="javascript:;" class="mceButton mceButtonEnabled mce_italic" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_italic_voice" title="Italic (Ctrl+I)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_italic"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_italic_voice">Italic (Ctrl+I)</span></a></td><td style="position: relative"><a role="button" id="messageBody_underline" href="javascript:;" class="mceButton mceButtonEnabled mce_underline" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_underline_voice" title="Underline (Ctrl+U)" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_underline"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_underline_voice">Underline (Ctrl+U)</span></a></td><td style="position: relative"><a role="button" id="messageBody_strikethrough" href="javascript:;" class="mceButton mceButtonEnabled mce_strikethrough" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_strikethrough_voice" title="Strikethrough" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_strikethrough"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_strikethrough_voice">Strikethrough</span></a></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_sub" href="javascript:;" class="mceButton mceButtonEnabled mce_sub" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_sub_voice" title="Subscript" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_sub"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_sub_voice">Subscript</span></a></td><td style="position: relative"><a role="button" id="messageBody_sup" href="javascript:;" class="mceButton mceButtonEnabled mce_sup" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_sup_voice" title="Superscript" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_sup"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_sup_voice">Superscript</span></a></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_forecolorpicker" href="javascript:;" class="mceButton mceButtonEnabled mce_forecolorpicker" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_forecolorpicker_voice" title="Select Text Color" tabindex="-1"><span class="mceIcon mce_forecolorpicker"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_forecolorpicker_voice">Select Text Color</span></a></td><td style="position: relative"><a role="button" id="messageBody_backcolorpicker" href="javascript:;" class="mceButton mceButtonEnabled mce_backcolorpicker" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_backcolorpicker_voice" title="Select Background Color" tabindex="-1"><span class="mceIcon mce_backcolorpicker"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_backcolorpicker_voice">Select Background Color</span></a></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_blockquote" href="javascript:;" class="mceButton mceButtonEnabled mce_blockquote" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_blockquote_voice" title="Block Quote" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_blockquote"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_blockquote_voice">Block Quote</span></a></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_link" href="javascript:;" class="mceButton mce_link mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_link_voice" title="Insert/Edit Link" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_link"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_link_voice">Insert/Edit Link</span></a></td><td style="position: relative"><a role="button" id="messageBody_unlink" href="javascript:;" class="mceButton mce_unlink mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_unlink_voice" title="Unlink" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_unlink"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_unlink_voice">Unlink</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table><table id="messageBody_toolbar2" class="mceToolbar mceToolbarRow2 Enabled" role="presentation" tabindex="-1" aria-disabled="false" aria-pressed="false" align="" cellspacing="0" cellpadding="0"><tbody><tr><td class="mceToolbarStart mceToolbarStartListBox mceFirst"><span><!-- IE --></span></td><td style="position: relative"><span role="listbox" aria-haspopup="true" aria-labelledby="messageBody_formatselect_voiceDesc" aria-describedby="messageBody_formatselect_voiceDesc"><table role="presentation" tabindex="-1" id="messageBody_formatselect" class="mceListBox mceListBoxEnabled mce_formatselect" aria-valuenow="Paragraph" cellspacing="0" cellpadding="0"><tbody><tr><td class="mceFirst"><span id="messageBody_formatselect_voiceDesc" class="voiceLabel" style="display:none;">Format - Paragraph</span><a id="messageBody_formatselect_text" tabindex="-1" href="javascript:;" class="mceText" onclick="return false;" onmousedown="return false;">Paragraph</a></td><td class="mceLast"><a id="messageBody_formatselect_open" tabindex="-1" href="javascript:;" class="mceOpen" onclick="return false;" onmousedown="return false;"><span><span style="display:none;" class="mceIconOnly" aria-hidden="true">▼</span></span></a></td></tr></tbody></table></span></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_justifyleft" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyleft" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_justifyleft_voice" title="Align Left" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_justifyleft"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_justifyleft_voice">Align Left</span></a></td><td style="position: relative"><a role="button" id="messageBody_justifycenter" href="javascript:;" class="mceButton mceButtonEnabled mce_justifycenter" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_justifycenter_voice" title="Align Center" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_justifycenter"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_justifycenter_voice">Align Center</span></a></td><td style="position: relative"><a role="button" id="messageBody_justifyright" href="javascript:;" class="mceButton mceButtonEnabled mce_justifyright" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_justifyright_voice" title="Align Right" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_justifyright"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_justifyright_voice">Align Right</span></a></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_bullist" href="javascript:;" class="mceButton mceButtonEnabled mce_bullist" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_bullist_voice" title="Insert/Remove Bulleted List" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_bullist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_bullist_voice">Insert/Remove Bulleted List</span></a></td><td style="position: relative"><a role="button" id="messageBody_numlist" href="javascript:;" class="mceButton mceButtonEnabled mce_numlist" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_numlist_voice" title="Insert/Remove Numbered List" tabindex="-1" aria-pressed="false"><span class="mceIcon mce_numlist"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_numlist_voice">Insert/Remove Numbered List</span></a></td><td style="position: relative"><a role="button" id="messageBody_outdent" href="javascript:;" class="mceButton mce_outdent mceButtonDisabled" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_outdent_voice" title="Decrease Indent" tabindex="-1" aria-disabled="true"><span class="mceIcon mce_outdent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_outdent_voice">Decrease Indent</span></a></td><td style="position: relative"><a role="button" id="messageBody_indent" href="javascript:;" class="mceButton mceButtonEnabled mce_indent" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_indent_voice" title="Increase Indent" tabindex="-1"><span class="mceIcon mce_indent"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_indent_voice">Increase Indent</span></a></td><td style="position: relative"><span class="mceSeparator" role="separator" aria-orientation="vertical" tabindex="-1"></span></td><td style="position: relative"><a role="button" id="messageBody_removeformat" href="javascript:;" class="mceButton mceButtonEnabled mce_removeformat" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_removeformat_voice" title="Remove Formatting" tabindex="-1"><span class="mceIcon mce_removeformat"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_removeformat_voice">Remove Formatting</span></a></td><td style="position: relative"><a role="button" id="messageBody_code" href="javascript:;" class="mceButton mceButtonEnabled mce_code" onmousedown="return false;" onclick="return false;" aria-labelledby="messageBody_code_voice" title="Edit HTML Source" tabindex="-1"><span class="mceIcon mce_code"></span><span class="mceVoiceLabel mceIconOnly" style="display: none;" id="messageBody_code_voice">Edit HTML Source</span></a></td><td class="mceToolbarEnd mceToolbarEndButton mceLast"><span><!-- IE --></span></td></tr></tbody></table></span></div><a href="#" accesskey="z" title="Jump to tool buttons - Alt+Q, Jump to editor - Alt-Z, Jump to element path - Alt-X" onfocus="tinyMCE.getInstanceById('messageBody').focus();"><!-- IE --></a></td></tr><tr><td class="mceIframeContainer mceFirst mceLast"><iframe id="messageBody_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Rich Text AreaPress ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 100px; display: block;" frameborder="0"></iframe></td></tr><tr class="mceLast"><td class="mceStatusbar mceFirst mceLast"><div id="messageBody_path_row" role="group" aria-labelledby="messageBody_path_voice" tabindex="-1"><span id="messageBody_path_voice">Path</span><span>: </span><span id="messageBody_path"><a href="javascript:;" role="button" onmousedown="return false;" class="mcePath_0" id="_mce_item_3" tabindex="-1">p</a></span></div><a id="messageBody_resize" href="javascript:;" onclick="return false;" class="mceResize" tabindex="-1"></a></td></tr></tbody></table></span></label></li>
						<li>
						<button name="submit" id="submit" type="submit">Send</button></li></ol>
					</form>
				</div>
				<div id="recent-group-messages">
					<div class="group-discussion">
						<a href="/message/viewdiscussion/37460" class="discussion-title" messageid="37460"><span class="discussion-title">test<span></span></span></a>
						<a class="discussion-list-author" href="/fcheslack">Faolan C-P</a>
						<span style="margin-left:20px;">Last Active: 4 months ago</span>
						<span style="margin-left:20px;">Last Post: <a class="author-link" href="/fcheslack">Faolan C-P</a></span>
					</div>
				</div>
			</div>
			<div class="minor-col last-col">
				<!-- Group Image -->
				<div id="react-groupInfo"></div>

				<!-- Member list -->
				<h2><a href="/groups/7/narwhal/members">Members (3)</a></h2>
					<div class="people-tiny-nuggets">
						<div class="nugget-user">
							<div class="nugget-tiny">
								<!-- Linked profile image -->
								<a href="/fcheslack">
									<img class="small-profile-image" src="https://s3.amazonaws.com/zotero.org/images/settings/profile/default_squarethumb.png" alt="fcheslack" title="fcheslack">
								</a>
										<!-- Affiliation for small size -->
							</div>
						</div>
					<div class="nugget-user">
						<div class="nugget-tiny">
							<!-- Linked profile image -->
							<a href="/fcp">
								<img class="small-profile-image" src="https://s3.amazonaws.com/zotero.org/images/settings/profile/default_squarethumb.png" alt="fcp" title="fcp">
							</a>
							<!-- Affiliation for small size -->
						</div>
					</div>
					<div class="nugget-user">
						<div class="nugget-tiny">
							<!-- Linked profile image -->
							<a href="/fcheslack3">
								<img class="small-profile-image" src="https://s3.amazonaws.com/zotero.org/images/settings/profile/default_squarethumb.png" alt="fcheslack3" title="fcheslack3">
							</a>
							<!-- Affiliation for small size -->
						</div>
					</div>
				</div>
			</div>

			<script type="text/javascript" charset="utf-8">
				ZoteroWebComponents.pageReady(function() {
					let tests = {
						test1: function(){
							var groupInfoProps = {"member":true,"group":{"id":7,"version":17,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-05-24T03:57:59Z","numItems":1},"data":{"id":7,"version":17,"name":"Narwhal","owner":10150,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[13586,23823]}},"pending":false,"ownershipInvitation":false,"displayNames":{"displayName":{"10150":"Faolan C-P"},"slug":{"10150":"fcheslack"}}};
							window.groupInfoElement = ReactDOM.render(
								React.createElement(ZoteroWebComponents.GroupInfo, groupInfoProps),
								document.getElementById('react-groupInfo')
							);
							
							var recentItemsProps = {"group":{"id":7,"version":17,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-05-24T03:57:59Z","numItems":1},"data":{"id":7,"version":17,"name":"Narwhal","owner":10150,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[13586,23823]}},"displayFields":["title","addedBy","dateModified"],"items":[]};
							window.recentItemsElement = ReactDOM.render(
								React.createElement(ZoteroWebComponents.RecentItems, recentItemsProps),
								document.getElementById('react-recentItems')
							);
						},
						test2: function(){
							var recentItemsProps = {"loading":false,"items":[{"key":"TAHZXRBF","version":6,"library":{"type":"group","id":7,"name":"Narwhal","links":{"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}}},"links":{"self":{"href":"https://apidev.zotero.org/groups/7/items/TAHZXRBF","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal/items/TAHZXRBF","type":"text/html"}},"meta":{"createdByUser":{"id":13586,"username":"fcp","name":"","links":{"alternate":{"href":"https://staging.zotero.net/fcp","type":"text/html"}}},"lastModifiedByUser":{"id":10150,"username":"fcheslack","name":"Faolan C-P","links":{"alternate":{"href":"https://staging.zotero.net/fcheslack","type":"text/html"}}},"numChildren":0},"data":{"key":"TAHZXRBF","version":6,"itemType":"webpage","title":"Narwhals, Narwhal Pictures, Narwhal Facts","creators":[],"abstractNote":"","websiteTitle":"National Geographic Animals","websiteType":"","date":"","shortTitle":"Narwhals","url":"http://animals.nationalgeographic.com/animals/mammals/narwhal/","accessDate":"","language":"","rights":"","extra":"","tags":[{"tag":"narwhal"}],"collections":["WZMBKZ6Z"],"relations":{},"dateAdded":"2012-08-06T16:16:16Z","dateModified":"2015-01-30T13:48:54Z"}}],"totalResults":"1","group":{"id":7,"version":17,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-05-24T03:57:59Z","numItems":1},"data":{"id":7,"version":17,"name":"Narwhal","owner":10150,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[13586,23823]}}};
							window.recentItemsElement = ReactDOM.render(
								React.createElement(ZoteroWebComponents.RecentItems, recentItemsProps),
								document.getElementById('react-recentItems')
							);
						},
						test3: function(){
							var groupInfoProps = {"member":true,"group":{"id":7,"version":17,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-05-24T03:57:59Z","numItems":1},"data":{"id":7,"version":17,"name":"Narwhal","owner":10150,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"http://narwhals.org","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[13586,23823]}},"pending":false,"ownershipInvitation":false,"displayNames":{"displayName":{"10150":"Faolan C-P"},"slug":{"10150":"fcheslack"}}};
							window.groupInfoElement = ReactDOM.render(
								React.createElement(ZoteroWebComponents.GroupInfo, groupInfoProps),
								document.getElementById('react-groupInfo')
							);
						},
						test4: function(){
							var groupInfoProps = {"groupImage":"https://s3.amazonaws.com/zotero.org/images/settings/group/1_200px.png","member":false,"group":{"id":7,"version":17,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-05-24T03:57:59Z","numItems":1},"data":{"id":7,"version":17,"name":"Narwhal","owner":10150,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[13586,23823]}},"pending":false,"ownershipInvitation":false,"displayNames":{"displayName":{"10150":"Faolan C-P"},"slug":{"10150":"fcheslack"}}};
							window.groupInfoElement = ReactDOM.render(
								React.createElement(ZoteroWebComponents.GroupInfo, groupInfoProps),
								document.getElementById('react-groupInfo')
							);
						},
						test5: function(){
							var groupInfoProps = {"groupImage":"https://s3.amazonaws.com/zotero.org/images/settings/group/1_200px.png","member":false,"group":{"id":7,"version":17,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-05-24T03:57:59Z","numItems":1},"data":{"id":7,"version":17,"name":"Narwhal","owner":1,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[13586,23823]}},"pending":false,"ownershipInvitation":false,"displayNames":{"displayName":{"10150":"Faolan C-P"},"slug":{"10150":"fcheslack"}}};
							window.groupInfoElement = ReactDOM.render(
								React.createElement(ZoteroWebComponents.GroupInfo, groupInfoProps),
								document.getElementById('react-groupInfo')
							);
						}
					}

					let testCase = tests['test1'];
					if(window.location.hash.length > 0){
						let testLabel = window.location.hash.substr(1);
						testCase = tests[testLabel];
					}

					testCase();

					ZoteroWebComponents.cycleTestFuncs(tests);
				});
			</script>

			</div>
		</div>
		<footer>
			<div class="center container">
					<img id="chnm-logo" src="../assets/images/theme/rrchnmlogo-gray.png" alt="Zotero">
				<nav role="secondary">                 
					<ul>
						<li><a href="/blog/">Blog</a></li>
						<li><a href="https://forums.zotero.live">Forums</a></li>
						<li><a href="/support/dev/start">Developers</a></li>
						<li><a href="/support/">Documentation</a></li>
						<li><a href="/support/terms/privacy">Privacy</a></li>
						<li><a href="/getinvolved/">Get Involved</a></li>
						<li><a href="/jobs">Jobs</a></li>
						<li><a href="/about/">About</a></li>
						<li class="last"><a href="?fullsite=0">Mobile Site</a></li>
					</ul>
				</nav>
				<p>
					Zotero is a project of the <a href="http://chnm.gmu.edu">Roy
					Rosenzweig Center for History and New Media</a>, and was initially funded
					 by the <a href="http://mellon.org">Andrew W. Mellon
					Foundation</a>, the <a href="http://imls.gov">Institute of
					Museum and Library Services</a>, and the <a
					href="http://sloan.org">Alfred P. Sloan Foundation</a>.
				</p>

			</div>
		</footer>
		
		<script type="text/javascript" charset="utf-8">
			if(typeof zoteroData == 'undefined'){
				var zoteroData = {};
			}
			var baseURL = "";
			var baseDomain = "//zotero.live";
			var staticPath = "/static";
		</script>
		<!-- End zoteroLibrary modules. -->
		<script type="text/javascript" charset="utf-8">
			Zotero = {
				currentUser:{
					userID:10150,
					slug:'fcheslack'
				}
			};
		</script>
	</body>
</html>