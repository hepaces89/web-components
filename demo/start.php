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
                    <a href="https://www.zotero.org/user/login/" title="Log In">Log In</a>
                    <a href="https://www.zotero.org/user/register/" title="Register">Register</a>
            </div>

            <a href="/settings/storage?ref=usb" class="button" id="purchase-storage-link"><img src="../assets/images/theme/archive.png" /> Upgrade Storage</a>

            <div id="navbar" class="container">
                <nav id="sitenav">
                    <ul>
                    <li ><a href="/">Home</a></li>
                    <li ><a href="https://zotero.live/fcheslack/items">My Library</a></li>
                    <li ><a href="/groups/">Groups</a></li>
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
            <div id="breadcrumbs">
              <a href="/">Home</a> &gt; Start
            </div>

            <!-- Output any stored messages -->

            <!-- hidden area for possible JS messages -->
            <div id="js-message">
                <ul id="js-message-list">
                </ul>
            </div>

            <!-- Output content -->
            <!-- NEW START PAGE -->
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>

            <div id='react-start'></div>


            <script type="text/javascript" charset="utf-8">
                ZoteroWebComponents.pageReady(function() {
                    window.startElement = ReactDOM.render(
                        React.createElement(ZoteroWebComponents.Start, null),
                        document.getElementById('react-start')
                    );

                    let tests = {
                        test1: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'zotero@zotero.org',
                                    email:'',
                                    email2:'',
                                    password:'',
                                    password2:''
                                },
                                usernameValidity:'invalid',
                                usernameMessage: 'Your email address can be used to log in to your Zotero account, but not as your username.',
                                registrationSuccessful:false
                            });
                        },
                        test2: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'valid-username',
                                    email:'',
                                    email2:'',
                                    password:'',
                                    password2:''
                                },
                                usernameValidity:'valid',
                                usernameMessage: '',
                                registrationSuccessful:false
                            });
                        },
                        test3: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'fcheslack',
                                    email:'',
                                    email2:'',
                                    password:'',
                                    password2:''
                                },
                                usernameValidity:'invalid',
                                usernameMessage: 'Username is not available',
                                registrationSuccessful:false
                            });
                        },
                        test4: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'fcheslack',
                                    email:'email@email.com',
                                    email2:'email2@email.com',
                                    password:'',
                                    password2:''
                                },
                                usernameValidity:'invalid',
                                usernameMessage: 'Username is not available',
                                registrationSuccessful:false
                            });
                        },
                        test5: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'valid',
                                    email:'email@email.com',
                                    email2:'email2@email.com',
                                    password:'',
                                    password2:''
                                },
                                formErrors:{
                                    email:['emails must match']
                                },
                                usernameValidity:'valid',
                                usernameMessage: '',
                                registrationSuccessful:false
                            });
                        },
                        test6: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'valid',
                                    email:'email@email.com',
                                    email2:'email@email.com',
                                    password:'',
                                    password2:''
                                },
                                usernameValidity:'valid',
                                usernameMessage: '',
                                registrationSuccessful:true
                            });
                        },
                        test7: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'valid',
                                    email:'email@email.com',
                                    email2:'email2@email.com',
                                    password:'',
                                    password2:''
                                },
                                formErrors:{},
                                formError:'Error processing registration',
                                usernameValidity:'valid',
                                usernameMessage: '',
                                registrationSuccessful:false
                            });
                        },
                        test8: function(){
							window.startElement.refs.registerForm.setState({
                                formData:{
                                    username:'valid',
                                    email:'email@email.com',
                                    email2:'email2@email.com',
                                    password:'',
                                    password2:''
                                },
                                formErrors:{},
                                formError:'',
                                usernameValidity:'valid',
                                usernameMessage: '',
                                registrationSuccessful:false,
                            });
                        },
                        test9: function(){
							window.startElement.refs.installConnectorPrompt.setState({browser:'Safari', oldSafari:true});
                        }
                    };

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
            Zotero = {
                //currentUser: {"userID":"10150","slug":"fcheslack"}
            };
        </script>
    </body>
</html>
