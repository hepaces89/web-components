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
                        
            <!-- Output any stored messages -->
                                                                                                            
            <!-- hidden area for possible JS messages -->
            <div id="js-message">
                <ul id="js-message-list">
                </ul>
            </div>

            <!-- Output content -->

            <div id='react-storage'></div>

            <script type="text/javascript" charset="utf-8">
                ZoteroWebComponents.pageReady(function() {
                    window.storageElement = ReactDOM.render(
                        React.createElement(ZoteroWebComponents.Storage, null),
                        document.getElementById('react-storage')
                    );
                    let now = Date.now() / 1000;

                    let testStates = {
                        test1: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":"1515741243","recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        test2: {"userSubscription":{"userID":10150,"storageLevel":2,"quota":"2000","expirationDate":"1454741243","recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},"operationPending":false,"notificationClass":"","notification":""},
                        test3: {"userSubscription":{"userID":10150,"storageLevel":2,"quota":"2000","expirationDate":"1515741243","recur":1,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"500.4","library":"406.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":true},"storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},"planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},"stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},"operationPending":false,"notificationClass":"","notification":""},
                        unused: {"userSubscription":{"userID":10150,"storageLevel":1,"quota":"300","expirationDate":0,"recur":false,"paymentType":"","orderID":"","usage":{"total":"55","library":"55","groups":{}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":[],
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":null,
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        overQuota: {"userSubscription":{"userID":10150,"storageLevel":2,"quota":"2000","expirationDate":"1515741243","recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        expiringSoon: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now+150000}`,"recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        unlimited: {"userSubscription":{"userID":10150,"storageLevel":6,"quota":"1000000","expirationDate":`${now+1500000}`,"recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9qd2rB9PeTn0H0","deleted":true},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        autoRenew: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now+150000}`,"recur":1,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9vs2nvCwQF4AVg","object":"customer","account_balance":0,"created":1484434018,"currency":null,"default_source":{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"-","address_country":"United States","address_line1":"-","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22030","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null},"delinquent":false,"description":"fcheslack","discount":null,"email":"fcheslack@gmail.com","livemode":false,"metadata":[],"shipping":null,"sources":{"object":"list","data":[{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"Falls Church","address_country":"United States","address_line1":"Covewood","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22042","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null}],"has_more":false,"total_count":1,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/sources"},"subscriptions":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/subscriptions"}},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        recurOnExpired: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now-150000}`,"recur":1,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9vs2nvCwQF4AVg","object":"customer","account_balance":0,"created":1484434018,"currency":null,"default_source":{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"-","address_country":"United States","address_line1":"-","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22030","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null},"delinquent":false,"description":"fcheslack","discount":null,"email":"fcheslack@gmail.com","livemode":false,"metadata":[],"shipping":null,"sources":{"object":"list","data":[{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"Falls Church","address_country":"United States","address_line1":"Covewood","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22042","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null}],"has_more":false,"total_count":1,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/sources"},"subscriptions":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/subscriptions"}},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                        expired: {"userSubscription":{"userID":10150,"storageLevel":3,"quota":"6000","expirationDate":`${now-150000}`,"recur":0,"paymentType":"stripe","orderID":"ch_9qd2iqgmUkmRea","usage":{"total":"2002.4","library":"1996.8","groups":{"2413":"1.6","8908":"4"}},"discounted":false,"discountEligible":false,"institutions":[],"hasExistingSubscription":false},
                            "storageGroups":{"2413":{"properties":null,"id":"2413","groupID":"2413","owner":10150,"type":"Private","name":"Test group","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"none","hasImage":0,"description":"","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"Test group","dateAdded":"2009-06-29T17:16:35Z","dateUpdated":"2014-03-18T19:28:14Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/2413"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/2413"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"Test group","owner":10150,"type":"Private","description":"","url":"","libraryEditing":"admins","libraryReading":"all","fileEditing":"none"},"ownerID":10150,"groupType":"Private","numItems":"18","members":[],"admins":[10150],"userReadable":false,"userEditable":false},"8908":{"properties":null,"id":"8908","groupID":"8908","owner":10150,"type":"PublicClosed","name":"owned group library","libraryEnabled":null,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members","hasImage":1,"description":"<p>purple</p>","disciplines":null,"enableComments":null,"url":"","adminIDs":[10150],"memberIDs":[],"title":"owned group library","dateAdded":"2009-12-14T07:04:24Z","dateUpdated":"2016-12-15T17:39:16Z","links":{"self":{"application/atom+xml":{"href":"https://api.zotero.org/groups/8908"}},"alternate":{"text/html":{"href":"http://zotero.org/groups/8908"}}},"author":{"name":"fcheslack","uri":"http://zotero.org/users/10150"},"contentArray":[],"entries":[],"apiObject":{"name":"owned group library","owner":10150,"type":"PublicClosed","description":"<p>purple</p>","url":"","hasImage":1,"libraryEditing":"admins","libraryReading":"all","fileEditing":"members"},"ownerID":10150,"groupType":"PublicClosed","numItems":"12","members":[],"admins":[10150],"userReadable":false,"userEditable":false}},
                            "planQuotas":{"1":300,"2":2000,"3":6000,"4":10000,"5":25000,"6":1000000},
                            "stripeCustomer":{"id":"cus_9vs2nvCwQF4AVg","object":"customer","account_balance":0,"created":1484434018,"currency":null,"default_source":{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"-","address_country":"United States","address_line1":"-","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22030","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null},"delinquent":false,"description":"fcheslack","discount":null,"email":"fcheslack@gmail.com","livemode":false,"metadata":[],"shipping":null,"sources":{"object":"list","data":[{"id":"card_9vszSVqQiMGHZr","object":"card","address_city":"Falls Church","address_country":"United States","address_line1":"Covewood","address_line1_check":"pass","address_line2":null,"address_state":"VA","address_zip":"22042","address_zip_check":"pass","brand":"JCB","country":"JP","customer":"cus_9vs2nvCwQF4AVg","cvc_check":"pass","dynamic_last4":null,"exp_month":11,"exp_year":2019,"fingerprint":"LTvqImi4NeRLtT3g","funding":"credit","last4":"0000","metadata":[],"name":"Faolan","tokenization_method":null}],"has_more":false,"total_count":1,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/sources"},"subscriptions":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"/v1/customers/cus_9vs2nvCwQF4AVg/subscriptions"}},
                            "operationPending":false,
                            "notificationClass":"",
                            "notification":""},
                    };

                    let testCase = testStates['test1'];
                    if(window.location.hash.length > 0){
                        let testLabel = window.location.hash.substr(1);
                        testCase = testStates[testLabel];
                    }
                    window.storageElement.setState(testCase);

                    ZoteroWebComponents.cycleTestCases(window.storageElement, testStates);
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
                currentUser: {"userID":"10150","slug":"fcheslack"}
            };
        </script>
    </body>
</html>
