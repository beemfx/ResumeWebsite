function DisplayDIV(name, bShow)
{
    //Decide if the div is to be shown or hidden.
    strShowState = bShow?'inherit':'none';

    var elem, vis;
    if( document.getElementById ) // this is the way the standards work
    elem = document.getElementById( name );
    else if( document.all ) // this is the way old msie versions work
    elem = document.all[name];
    else if( document.layers ) // this is the way nn4 works
    elem = document.layers[name];

    vis = elem.style;

    vis.display = strShowState;
}

function DIVSwap(strShow, strHide)
{
    DisplayDIV(strShow, true);
    DisplayDIV(strHide, false);
}

function BeginSection(strName, bStartHidden = false, nLevel = 3)
{
    return "Replaced!";
    strBtnTextExpand = sprintf("<a href=\"javascript:DIVSwap('%s', '%s');\"><img class=\"button\" src=\"/assets/expand.png\" alt=\"Expand\"/></a>", strName + 'Exp', strName + 'Hid');
	strBtnTextCollapse = sprintf("<a href=\"javascript:DIVSwap('%s', '%s');\"><img class=\"button\" src=\"/assets/collapse.png\" alt=\"Expand\"/></a>", strName + 'Hid', strName + 'Exp');
	
    var out = "";

	out += sprintf("<div style=\"display:%s;\" id=\"%s\">\n", bStartHidden ? 'inline' : 'none', strName + 'Hid');
	out += printf('<h%1$d>%3$s %2$s</h%1$d>', nLevel, strName, strBtnTextExpand);
	out += printf("</div>\n");
	out += printf("<div style=\"display:%s;\" id=\"%s\">\n", bStartHidden ? 'none' : 'inline', strName + 'Exp');
	out += printf('<h%1$d>%3$s %2$s</h%1$d>', nLevel, strName, strBtnTextCollapse);
    return out;
}

function EndSection()
{
    return "</div>)";
}