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
                    <a href="https://forums.zotero.live/messages/inbox">
                                                    <strong>Inbox (8)</strong>
                                            </a>
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

            <div id='react-usergroups'></div>

            <script type="text/javascript" charset="utf-8">
                ZoteroWebComponents.pageReady(function() {
                    window.userGroupsElement = ReactDOM.render(
                        React.createElement(ZoteroWebComponents.UserGroups, null),
                        document.getElementById('react-usergroups')
                    );

                    window.userGroupsElement.setState({"groups":[{"id":35,"version":1,"links":{"self":{"href":"https://apidev.zotero.org/groups/35","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/500_please","type":"text/html"}},"meta":{"created":"2012-07-27T19:49:53Z","lastModified":"2012-07-27T19:49:53Z","numItems":4},"data":{"id":35,"version":1,"name":"500 please","owner":10150,"type":"PublicOpen","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none","members":[13586]}},{"id":28,"version":5,"links":{"self":{"href":"https://apidev.zotero.org/groups/28","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/cultural__sustainability","type":"text/html"}},"meta":{"created":"2011-10-09T19:51:09Z","lastModified":"2014-10-20T01:48:30Z","numItems":0},"data":{"id":28,"version":5,"name":"cultural + sustainability","owner":10150,"type":"PublicClosed","description":"<p>Cultural sustainability</p>\n","url":"test.zotero.net","libraryEditing":"members","libraryReading":"all","fileEditing":"members"}},{"id":30,"version":3,"links":{"self":{"href":"https://apidev.zotero.org/groups/30","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/faolans_test__group","type":"text/html"}},"meta":{"created":"2011-10-09T19:58:52Z","lastModified":"2014-10-24T19:28:07Z","numItems":8},"data":{"id":30,"version":3,"name":"faolan's test & group","owner":10150,"type":"PublicOpen","description":"<p>Description description</p>\n","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none","members":[13586]}},{"id":26,"version":1,"links":{"self":{"href":"https://apidev.zotero.org/groups/26","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/google_docs_test","type":"text/html"}},"meta":{"created":"2011-06-02T10:07:41Z","lastModified":"2011-06-02T13:56:38Z","numItems":4},"data":{"id":26,"version":1,"name":"google docs test","owner":8192,"type":"PublicClosed","description":"","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","members":[10150,23823]}},{"id":7,"version":2,"links":{"self":{"href":"https://apidev.zotero.org/groups/7","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/narwhal","type":"text/html"}},"meta":{"created":"2010-05-24T20:47:37Z","lastModified":"2017-01-27T04:14:36Z","numItems":1},"data":{"id":7,"version":2,"name":"Narwhal","owner":10150,"type":"PublicClosed","description":"<p>Narwhals!</p>","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[23823],"members":[13586]}},{"id":1,"version":1,"links":{"self":{"href":"https://apidev.zotero.org/groups/1","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/panda","type":"text/html"}},"meta":{"created":"2010-02-17T23:59:17Z","lastModified":"2014-06-27T20:27:40Z","numItems":27},"data":{"id":1,"version":1,"name":"Panda","owner":14058,"type":"PublicClosed","description":"<p>The <strong>panda</strong> (<em>Ailuropoda melanoleuca</em>, <small>lit.</small> \"black and white cat-foot\"),<sup class=\"reference\"><a rel='nofollow' href=\"http://en.wikipedia.org/wiki/Giant_panda#cite_note-Scheff_Duncan-2\"><span>[</span>2<span>]</span></a></sup> also known as the <strong>giant panda</strong> to distinguish it from the unrelated <a rel='nofollow' href=\"http://en.wikipedia.org/wiki/Red_panda\" title=\"Red panda\">red panda</a>, is a</p>\n","url":"","hasImage":1,"libraryEditing":"members","libraryReading":"all","fileEditing":"members","admins":[3,10150],"members":[6]}},{"id":34,"version":2,"links":{"self":{"href":"https://apidev.zotero.org/groups/34","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/purple","type":"text/html"}},"meta":{"created":"2012-07-27T19:48:32Z","lastModified":"2016-12-13T22:19:52Z","numItems":2},"data":{"id":34,"version":2,"name":"purple","owner":10150,"type":"PublicClosed","description":"<p>Testing <em>url</em> <span style=\"text-decoration:underline;\">encoding</span> for <a rel='nofollow' href=\"http://www.zotero.org\">descriptions</a>. </p>","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"members"}},{"id":247,"version":1,"links":{"self":{"href":"https://apidev.zotero.org/groups/247","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/solar_energy","type":"text/html"}},"meta":{"created":"2017-01-12T13:45:06Z","lastModified":"2017-01-12T13:45:06Z","numItems":45},"data":{"id":247,"version":1,"name":"Solar Energy","owner":10150,"type":"PublicOpen","description":"","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"none"}},{"id":14,"version":1,"links":{"self":{"href":"https://apidev.zotero.org/groups/14","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/vegan_recipes","type":"text/html"}},"meta":{"created":"2010-12-09T16:05:04Z","lastModified":"2013-11-08T21:19:39Z","numItems":3},"data":{"id":14,"version":1,"name":"Vegan Recipes","owner":10150,"type":"PublicOpen","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none","members":[6,8192]}},{"id":12,"version":1,"links":{"self":{"href":"https://apidev.zotero.org/groups/12","type":"application/json"},"alternate":{"href":"https://staging.zotero.net/groups/virtual_worlds","type":"text/html"}},"meta":{"created":"2010-09-10T03:28:30Z","lastModified":"2011-03-16T18:41:56Z","numItems":190},"data":{"id":12,"version":1,"name":"virtual worlds","owner":14058,"type":"PublicOpen","description":"","url":"","libraryEditing":"members","libraryReading":"all","fileEditing":"none","members":[10150]}}],"loading":false,"userID":"10150","groupsLoaded":true});
                });
            </script>

            </div>
        </div>
        <footer>
            <div class="center container">
                    <img id="chnm-logo" src="../assets/images/theme/rrchnmlogo-gray.png" alt="Zotero">
                <nav role="secondary">                 
                    <ul>
                        <!-- <li><a href="#">Give Us Feedback</a></li> -->
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
            Zotero = {};
        </script>
    </body>
</html>
