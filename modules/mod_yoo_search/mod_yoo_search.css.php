/* Copyright (C) 2007 - 2009 YOOtheme GmbH */

a:focus { outline: none; }
button::-moz-focus-inner { border: none; }

div.yoo-search { 
	position: relative;
	z-index	: 99;
}

div.yoo-search ul {
	margin: 0px;
	padding: 0px;
}
 
div.yoo-search li {
	margin: 0px;
	padding: 0px;
	display: block;
}

div.yoo-search div.resultbox {
	display: none;
}/* Copyright (C) 2007 - 2009 YOOtheme GmbH */

div.default div.yoo-search {
	width: 120px;
	height: 18px;
}

/* searchbox */
div.default div.yoo-search div.searchbox {
	width: 120px;
	height: 18px;
	padding: 0px;
	margin: 0px;
	background: url(styles/default/images/searchbox_bg.png) 0 0 no-repeat; /* ie6png:crop */
}

div.default div.yoo-search div.searchbox:hover  {
	background: url(styles/default/images/searchbox_bg.png) 0 -18px no-repeat; /* ie6png:crop */
}

div.default div.yoo-search div.searchbox:hover input {
	color: #000000;
}

div.default div.yoo-search div.searchbox input:focus {
	color: #000000;
}

div.default div.yoo-search div.searchbox input {
	width: 84px;
	height: 15px;
	padding: 3px 0px 0px 0px;
	border: none;
	outline: none;
	background: none;
	float: left;
	color: #646464;
	font-size: 11px;
}

div.default div.yoo-search div.searchbox button {
	width: 18px;
	height: 18px;
	padding: 0px;
	border: none;
	float: left;
	cursor: pointer;
	line-height: 0px;
}

div.default div.yoo-search div.searchbox button.search-magnifier {
	background: url(styles/default/images/magnifier_icon.png) 0 0 no-repeat;
}

div.default div.yoo-search div.searchbox button.search-close {
	background: url(styles/default/images/close_icon.png) 0 0 no-repeat;
}

div.default div.yoo-search div.searchbox button.search-loader {
	background: url(styles/default/images/loader_icon.gif) 0 0 no-repeat;
}

/* resultbox */
div.default div.yoo-search div.resultbox {
	position: absolute;
	right: 0px;
	top: 18px;
	z-index: 10;
}

div.default div.yoo-search div.resultbox-bg {
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	background: #FAFAFA;
}

div.default div.yoo-search div.resultbox-bl {
	background: url(styles/default/images/resultbox_bl.png) 0 100% no-repeat;
}

div.default div.yoo-search div.resultbox-br {
	padding: 0px 10px 0px 10px;
	background: url(styles/default/images/resultbox_br.png) 100% 100% no-repeat;
}

div.default div.yoo-search div.resultbox-b {
	height: 30px;
	background: url(styles/default/images/resultbox_b.png) 0 100% repeat-x;
	text-align: right;
	line-height: 28px;
	font-weight: bold;
}

div.default div.yoo-search div.resultbox-b a:link,
div.default div.yoo-search div.resultbox-b a:visited,
div.default div.yoo-search div.resultbox-b a:hover {
	color: #ffffff;
	text-decoration: none;
}

div.default div.yoo-search a.search-more {
	cursor: pointer;
	color: #ffffff;
}

div.default div.yoo-search span.search-more {
	display: block;
	width: 20px;
	height: 30px;
	background: url(styles/default/images/more_icon.png) 0 0 no-repeat;
	float: right;
	cursor: pointer;
}

div.default div.yoo-search h3.search-header {
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 5px;
	height: 25px;
	background: url(styles/default/images/header_bg.png) 0 0 repeat-x;
	line-height: 25px;
	font-weight: bold;
	color: #ffffff;
	font-size: 100%;
	letter-spacing: 0px;
}

div.default div.yoo-search .resultbox-bg a {
	padding: 5px 10px 5px 10px;
	background: #FAFAFA;
	display: block;
	font-size: 11px;
	line-height: 140%;
	overflow: hidden;
}

div.default div.yoo-search .search-categories a {
	min-height: 45px;
}

div.default div.yoo-search .search-results a {
	min-height: 30px;
}

div.default div.yoo-search .resultbox-bg a:hover {
	background: #E6E7E8;
}

div.default div.yoo-search .resultbox-bg a:link,
div.default div.yoo-search .resultbox-bg a:visited,
div.default div.yoo-search .resultbox-bg a:hover {
	color: #646464;
	text-decoration: none;
}

div.default div.yoo-search .resultbox-bg a h3 {
	margin: 0px;
	font-size: 110%;
	color: #323232;
	line-height: 140%;
	font-weight: bold;
	letter-spacing: 0px;
}

div.default div.yoo-search .resultbox-bg img {
	margin-right: 10px;
	float: left;
}/* Copyright (C) 2007 - 2009 YOOtheme GmbH */

.yootools-black div.default div.yoo-search div.resultbox-bg {
	border-left: 1px solid #323232;
	border-right: 1px solid #323232;
	background: #1e1e1e;
}

.yootools-black div.default div.yoo-search div.resultbox-bl {
	background: url(styles/default/black/images/resultbox_bl.png) 0 100% no-repeat;
}

.yootools-black div.default div.yoo-search div.resultbox-br {
	background: url(styles/default/black/images/resultbox_br.png) 100% 100% no-repeat;
}

.yootools-black div.default div.yoo-search div.resultbox-b {
	background: url(styles/default/black/images/resultbox_b.png) 0 100% repeat-x;
}

.yootools-black div.default div.yoo-search div.resultbox-b a:link,
.yootools-black div.default div.yoo-search div.resultbox-b a:visited,
.yootools-black div.default div.yoo-search div.resultbox-b a:hover {
	color: #C8C8C8;
}

.yootools-black div.default div.yoo-search a.search-more {
	color: #C8C8C8;
}

.yootools-black div.default div.yoo-search span.search-more {
	background: url(styles/default/black/images/more_icon.png) 0 0 no-repeat;
}

.yootools-black div.default div.yoo-search h3.search-header {
	background: url(styles/default/black/images/header_bg.png) 0 0 repeat-x;
	color: #C8C8C8;
}

.yootools-black div.default div.yoo-search .resultbox-bg a {
	background: #1e1e1e;
}

.yootools-black div.default div.yoo-search .resultbox-bg a:hover {
	background: #282828;
}

.yootools-black div.default div.yoo-search .resultbox-bg a:link,
.yootools-black div.default div.yoo-search .resultbox-bg a:visited,
.yootools-black div.default div.yoo-search .resultbox-bg a:hover {
	color: #646464;
}

.yootools-black div.default div.yoo-search .resultbox-bg a h3 {
	color: #969696;
}
/* Copyright (C) 2007 - 2009 YOOtheme GmbH */

div.blank div.yoo-search {
	width: 120px;
	height: 20px;
}

/* searchbox */
div.blank div.yoo-search div.searchbox {
	position: relative;
	width: 120px;
	height: 20px;
	padding: 0px;
	margin: 0px;
}

div.blank div.yoo-search div.searchbox input {
	width: 180px;
	height: 25px;
	padding: 5px 0px 0px 15px;
	border: none;
	outline: none;
	background: url(styles/blank/images/searchbox_input.png) no-repeat;
	color:#808080;
	font-size:9pt;
}

div.blank div.yoo-search div.searchbox input:hover,
div.blank div.yoo-search div.searchbox input:focus {
	color: #000000;
	}

div.blank div.yoo-search div.searchbox button {
	position: absolute;
	top: 0px;
	width: 30px;
	height: 25px;
	padding: 0px;
	border: none;
	cursor: pointer;
	line-height: 0px;
	margin-left: -25px;
}

div.blank div.yoo-search div.searchbox button.search-magnifier {
	left: 0px;
	background: url(styles/blank/images/magnifier_icon.png) 50% 60% no-repeat;
}

div.blank div.yoo-search div.searchbox button.search-close {
	right: -60px;
	background: url(styles/blank/images/close_icon.png) 30% 60% no-repeat;
}

div.blank div.yoo-search div.searchbox button.search-loader {
	right: -60px;
	background: url(styles/blank/images/loader_icon.gif) 50% 50% no-repeat;
}

/* resultbox */
div.blank div.yoo-search div.resultbox {
	position: absolute;
	right: -60px;
	top: 22px;
	z-index: 10;
}

div.blank div.yoo-search div.resultbox-bg {
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	background: #FAFAFA;
}

div.blank div.yoo-search div.resultbox-bl {}
div.blank div.yoo-search div.resultbox-br {}
div.blank div.yoo-search div.resultbox-b {
	height: 28px;
	padding-right: 10px;
	border: 1px solid #C8C8C8;
	border-top: none;
	background-color: #CFD0D2;
	background-image:url(styles/blank/images/searchBoxHeadBack.jpg);
	background-repeat:repeat-x;
	text-align: right;
	line-height: 28px;
	font-weight: bold;
}

div.blank div.yoo-search div.resultbox-b a:link,
div.blank div.yoo-search div.resultbox-b a:visited,
div.blank div.yoo-search div.resultbox-b a:hover {
	color: #888;
	text-decoration: none;
}

div.blank div.yoo-search a.search-more {
	cursor: pointer;
	color: #B3B3B3;
}

div.blank div.yoo-search span.search-more {
	display: block;
	width: 24px;
	height: 24px;
	margin-left: 8px;
	background: url(styles/blank/images/more_icon.png) 0 4px no-repeat;
	float: right;
	cursor: pointer;
}

div.blank div.yoo-search h3.search-header {
	margin: 0px;
	padding: 0px;
	height: 28px;
	background-color: #CFD0D2;
	background-image:url(styles/blank/images/searchBoxHeadBack.jpg);
	background-repeat:repeat-x;
	line-height: 29px;
	text-indent: 10px;
	color: #888;
	font-size: 10.45pt;
	letter-spacing:0.03em;
	font-weight:lighter;
	text-transform:none;
	letter-spacing:0;
	border-bottom:1px solid #DDD;
}

div.blank div.yoo-search .resultbox-bg a {
	padding: 5px 10px 5px 10px;
	background: #FAFAFA;
	display: block;
	font-size: 11px;
	line-height: 140%;
	overflow: hidden;
}

div.blank div.yoo-search .search-categories a {
	min-height: 45px;
}

div.blank div.yoo-search .search-results a {
	min-height: 30px;
	border-bottom:1px solid #EEE;
	padding-bottom:10px;

}

div.blank div.yoo-search .resultbox-bg a:hover {
	background:#E6E6E6;
}

div.blank div.yoo-search .resultbox-bg a:link,
div.blank div.yoo-search .resultbox-bg a:visited,
div.blank div.yoo-search .resultbox-bg a:hover {
	color: #646464;
	text-decoration: none;
}

div.blank div.yoo-search .resultbox-bg a h3 {
	margin: 0px;
	line-height: 1.25em;;
	font-weight: bold;
	letter-spacing: 0px;
	color:#4D4D4D;
	font-size:9.5pt;
	font-weight:bolder;
	text-transform:none;;
	letter-spacing:0;
}

div.blank div.yoo-search .resultbox-bg img {
	margin-right: 10px;
	float: left;
}/* Copyright (C) 2007 - 2009 YOOtheme GmbH */

.yootools-black div.blank div.yoo-search div.resultbox-bg {
	border-left: 1px solid #323232;
	border-right: 1px solid #323232;
	background: #1E1E1E;
}

.yootools-black div.blank div.yoo-search div.resultbox-b {
	border: 1px solid #323232;
	border-top: none;
	background: #323232;
}

.yootools-black div.blank div.yoo-search div.resultbox-b a:link,
.yootools-black div.blank div.yoo-search div.resultbox-b a:visited,
.yootools-black div.blank div.yoo-search div.resultbox-b a:hover {
	color: #C8C8C8;
}

.yootools-black div.blank div.yoo-search a.search-more {
	color: #C8C8C8;
}

.yootools-black div.blank div.yoo-search span.search-more {
	background: url(styles/blank/black/images/more_icon.png) 0 60% no-repeat;
}

.yootools-black div.blank div.yoo-search h3.search-header {
	background: #323232;
	color: #C8C8C8;
}

.yootools-black div.blank div.yoo-search .resultbox-bg a {
	background: #1E1E1E;
}

.yootools-black div.blank div.yoo-search .resultbox-bg a:hover {
	background: #282828;
}

.yootools-black div.blank div.yoo-search .resultbox-bg a:link,
.yootools-black div.blank div.yoo-search .resultbox-bg a:visited,
.yootools-black div.blank div.yoo-search .resultbox-bg a:hover {
	color: #646464;
}

.yootools-black div.blank div.yoo-search .resultbox-bg a h3 {
	color: #969696;
}
