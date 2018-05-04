var editNow='';
var clickPrev='';
var framePrev='';
var REOK=checkRegExp();
var ST1='font-size:12px;line-height:16px;font-family:\u5B8B\u4F53,\'MS Song\';';
function DrawEdit()
{
	var ST0=ST1+'height:'+(CSS1?16:20)+'px;';var ST2=NS.IE?'':'border-width:1px;';
	var S=('<div style="'+ST1+'margin:3px"><button type="button" style="'+ST0+ST2+'width:72px;height:20px;" onclick="save(\'u\');">\u4FDD\u5B58\u68CB\u8C31</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="preview();">\u9884\u89C8</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="document.formSave.reset();">\u91CD\u7F6E</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="Delete(250)">\u5220\u9664</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="Delete(88)">\u4E22\u5F03</button>\u3000<button type="button" style="'+ST0+ST2+'width:124px;height:20px;" onclick="save(\'m\');">\u4FDD\u5B58\u5230\u5927\u5E08\u5BF9\u5C40</button></div>');
	S+=('<div style="'+ST0+'width:448px;height:52px;margin-left:3px;background-color:#fff;">');
	S+=('<div style="'+ST1+'padding:3px 0 0 12px;"><div style="'+ST1+'color:#00f;">\u6CE8\u610F\uFF1A\u60A8\u76EE\u524D\u53EF\u4EE5\u9009\u62E9\u5C06\u6700\u65B0<span style="'+ST1+'color:#f00">\u8C61\u68CB\u5927\u8D5B</span>\u6216<span style="'+ST1+'color:#f00">\u540D\u624B\u4E4B\u95F4</span>\u5BF9\u5C40\u68CB\u8C31\u5F55\u5165\u5230\u5927\u5E08\u5BF9\u5C40\u5E93</div>');
	S+=('<div style="'+ST1+'color:#00f;">\u5982\u8981\u5C06\u68CB\u8C31<a href="javascript:save(\'m\')" style="'+ST1+'color:#f00">\u4FDD\u5B58\u5230\u5927\u5E08\u5BF9\u5C40</a>\uFF0C\u8BF7<span style="'+ST1+'color:#f00">\u8BA4\u771F\u8F93\u5165</span>\u5404\u9879\u6570\u636E\uFF0C\u70B9\u680F\u76EE\u5DE6\u4FA7\u6807\u9898\u6587\u5B57\u53EF\u4EE5</div>');
	S+=('<div style="'+ST1+'color:#00f;"><a href="javascript:g_hide(\'fastlink.htm#\')" style="'+ST1+'color:#f00">\u5FEB\u901F\u5F55\u5165</a>\u9884\u8BBE\u503C\u3002\u70B9<a href="javascript:g_tour()" style="'+ST1+'color:#f00">\u67E5\u5BF9\u9635</a>\u53EF\u6839\u636E\u67E5\u5230\u7684\u5BF9\u9635\u8BBE\u7F6E\u68CB\u8C31\u6570\u636E<span style="'+ST1+'color:#f00">\u6781\u5927\u63D0\u9AD8\u5F55\u8C31\u901F\u5EA6</span></div></div></div>');
	S+=('<form name="formSave" id="formSave" style="margin:3px;'+ST1+(CSS1?'line-height:24px;':'')+'" method="post" action="save.asp"'+(isSP?' target="login_save"':'')+'>');
	S+=(InputBar('DhtmlXQ_owner','155','\u60A8\u7684\u540D\u79F0')+' \u3000\u60A8\u7684\u5BC6\u7801\uFF1A<input type="password" value="" style="'+ST0+'width:'+(CSS1?151:155)+'px;" name="DhtmlXQ_ownerpass">');
	S+=('<br>'+InputBar('DhtmlXQ_id','155','\u68CB\u8C31\u5E8F\u53F7','g_clearid')+' \u3000' +InputBar('DhtmlXQ_sortid','155','\u6392\u5E8F\u7F16\u53F7'));
	S+=('<br>'+InputBar('DhtmlXQ_title','388','\u68CB\u8C31\u6807\u9898','g_changerbt')+SelectPrev('title'));
	S+=('<div style="'+ST0+'width:448px;height:20px;position:relative;">\u5B9E\u7528\u94FE\u63A5\uFF1A<input type="text" style="'+ST0+'width:'+(CSS1?384:388)+'px;"><div style="'+ST1+'position:absolute;left:63px;top:'+(NS.IE>0&&NS.IE<9?4:2)+'px;"><a href="javascript:g_rbt()" style="'+ST1+'color:#00f">\u63D0\u53D6\u7EA2\u9ED1\u65B9\u8D44\u6599</a> <a href="javascript:g_title()" style="'+ST1+'color:#f00">\u683C\u5F0F\u5316\u6807\u9898</a> <a href="javascript:g_live()" style="'+ST1+'color:#00f">\u5C06\u672C\u5C40\u8BBE\u4E3A<span style="'+ST1+'color:#f00">\u5BF9\u5C40\u76F4\u64AD</span></a> <a href="javascript:g_hide(\'fastlink.htm#\')" style="'+ST1+'color:#00f">\u67E5\u770B\u9884\u8BBE\u503C</a> <a href="javascript:g_tour()" style="'+ST1+'color:#f00">\u67E5\u5BF9\u9635</a></div></div>');
	S+=(''+InputBar('DhtmlXQ_class','388','\u6240\u5C5E\u5206\u7C7B','g_class')+SelectPrev('class'));
	S+=('<br>'+InputBar('DhtmlXQ_event','388','\u6BD4\u8D5B\u540D\u79F0','g_event')+SelectPrev('event'));
	S+=('<br>'+InputBar('DhtmlXQ_open','388','\u5E03\u5C40\u7C7B\u578B','g_open')+SelectPrev('open'));
	S+=('<br>'+InputBar('DhtmlXQ_refer','388','\u68CB\u8C31\u6765\u6E90','g_refer')+SelectPrev('refer'));
	S+=('<br>'+InputBar('DhtmlXQ_other','311','\u68CB\u8C31\u5907\u6CE8','g_other')+' '+SelectBar('DhtmlXQ_other','71','\u6162\u68CB\u7B2C1\u5C40_\u6162\u68CB\u7B2C2\u5C40_\u6162\u68CB\u7B2C3\u5C40_\u6162\u68CB\u7B2C4\u5C40_\u5FEB\u68CB\u7B2C1\u5C40_\u5FEB\u68CB\u7B2C2\u5C40_\u5FEB\u68CB\u7B2C3\u5C40_\u5FEB\u68CB\u7B2C4\u5C40_\u8D85\u5FEB\u68CB\u7B2C1\u5C40_\u8D85\u5FEB\u68CB\u7B2C2\u5C40_\u52A0\u8D5B\u7B2C1\u5C40_\u52A0\u8D5B\u7B2C2\u5C40_\u52A0\u8D5B\u7B2C3\u5C40_\u52A0\u8D5B\u7B2C4\u5C40_\u9644\u52A0\u8D5B\u7B2C1\u5C40_\u9644\u52A0\u8D5B\u7B2C2\u5C40','\u66F4\u6539')+SelectPrev('other'));
	S+=('<br>'+InputBar('DhtmlXQ_judge','155','\u6267\u53F0\u88C1\u5224')+SelectPrev('judge'));
	S+=(' ' +InputBar('DhtmlXQ_record','155','\u8BB0\u8C31\u4EBA\u5458')+SelectPrev('record'));
	S+=('<br>'+InputBar('DhtmlXQ_remark','155','\u8BC4\u6CE8\u4EBA\u5458')+SelectPrev('remark'));
	S+=(' ' +InputBar('DhtmlXQ_author','155','\u68CB\u8C31\u4F5C\u8005')+SelectPrev('author'));
	S+=('<br>'+InputBar('DhtmlXQ_redteam','155','\u7EA2\u65B9\u56E2\u4F53')+SelectPrev('redteam'));
	S+=(' ' +InputBar('DhtmlXQ_blackteam','155','\u9ED1\u65B9\u56E2\u4F53')+SelectPrev('blackteam'));
	S+=('<br>'+InputBar('DhtmlXQ_redname','155','\u7EA2\u65B9\u59D3\u540D')+SelectPrev('redname'));
	S+=(' ' +InputBar('DhtmlXQ_blackname','155','\u9ED1\u65B9\u59D3\u540D')+SelectPrev('blackname'));
	S+=('<br>'+InputBar('DhtmlXQ_redlevel','155','\u7EA2\u65B9\u7B49\u7EA7','g_redlevel')+SelectPrev('redlevel'));
	S+=(' ' +InputBar('DhtmlXQ_blacklevel','155','\u9ED1\u65B9\u7B49\u7EA7','g_blacklevel'))+SelectPrev('blacklevel');
	S+=('<br>'+InputBar('DhtmlXQ_date','155','\u6BD4\u8D5B\u65E5\u671F','g_date')+SelectPrev('date'));
	S+=(' ' +InputBar('DhtmlXQ_place','155','\u6BD4\u8D5B\u5730\u70B9','g_place')+SelectPrev('place'));
	S+=('<br>'+InputBar('DhtmlXQ_round','78','\u6BD4\u8D5B\u8F6E\u6B21','g_round')+' '+SelectBar('DhtmlXQ_round','71','\u7B2C22\u8F6E_\u7B2C21\u8F6E_\u7B2C20\u8F6E_\u7B2C19\u8F6E_\u7B2C18\u8F6E_\u7B2C17\u8F6E_\u7B2C16\u8F6E_\u7B2C15\u8F6E_\u7B2C14\u8F6E_\u7B2C13\u8F6E_\u7B2C12\u8F6E_\u7B2C11\u8F6E_\u7B2C10\u8F6E_\u7B2C09\u8F6E_\u7B2C08\u8F6E_\u7B2C07\u8F6E_\u7B2C06\u8F6E_\u7B2C05\u8F6E_\u7B2C04\u8F6E_\u7B2C03\u8F6E_\u7B2C02\u8F6E_\u7B2C01\u8F6E_\u51B3\u8D5B_\u534A\u51B3\u8D5B_8\u8FDB4_16\u8FDB8_32\u8FDB16','\u66F4\u6539')+SelectPrev('round'));
	S+=(' ' +InputBar('DhtmlXQ_timerule','78','\u8BB0\u65F6\u89C4\u5219','g_timerule')+' '+SelectBar('DhtmlXQ_timerule','71','1\u5206\u5305\u5E72_3\u5206\u5305\u5E72_5\u5206\u5305\u5E72_10\u5206\u5305\u5E72_30\u5206\u5305\u5E72_40\u5206\u5305\u5E72_45\u5206\u5305\u5E72_60\u5206\u5305\u5E72_5\u5206\uFF0B3\u79D2_10\u5206\uFF0B3\u79D2_10\u5206\uFF0B10\u79D2_40\u5206\uFF0B20\u79D2_60\u5206\uFF0B30\u79D2_\u7EA26\u5206\u9ED14\u5206\uFF0B5\u79D2_10-5-0_30-6-60_30-10-60','\u66F4\u6539')+SelectPrev('timerule'));
	S+=('<br>'+InputBar('DhtmlXQ_group','78','\u6BD4\u8D5B\u7EC4\u522B','g_group')+' '+SelectBar('DhtmlXQ_group','71','\u8D85\u7EA7\u8054\u8D5B_\u7532\u7EA7\u8054\u8D5B_\u5916\u56F4\u8D5B_\u70ED\u8EAB\u8D5B_\u7537\u5B50\u7EC4_\u5973\u5B50\u7EC4_\u7537\u5B50\u7532\u7EC4_\u7537\u5B50\u4E59\u7EC4_\u7537\u5B50\u4E2A\u4EBA_\u5973\u5B50\u4E2A\u4EBA_\u7537\u5B50\u56E2\u4F53_\u5973\u5B50\u56E2\u4F53_\u7537\u5B50A\u7EC4_\u7537\u5B50B\u7EC4_\u7537\u5B50C\u7EC4_\u7537\u5B50D\u7EC4_\u5973\u5B50A\u7EC4_\u5973\u5B50B\u7EC4','\u66F4\u6539')+SelectPrev('group'));
	S+=(' ' +InputBar('DhtmlXQ_table','78','\u6BD4\u8D5B\u53F0\u6B21','g_table')+' '+SelectBar('DhtmlXQ_table','71','\u7B2C20\u53F0_\u7B2C19\u53F0_\u7B2C18\u53F0_\u7B2C17\u53F0_\u7B2C16\u53F0_\u7B2C15\u53F0_\u7B2C14\u53F0_\u7B2C13\u53F0_\u7B2C12\u53F0_\u7B2C11\u53F0_\u7B2C10\u53F0_\u7B2C09\u53F0_\u7B2C08\u53F0_\u7B2C07\u53F0_\u7B2C06\u53F0_\u7B2C05\u53F0_\u7B2C04\u53F0_\u7B2C03\u53F0_\u7B2C02\u53F0_\u7B2C01\u53F0','\u66F4\u6539')+SelectPrev('table'));
	S+=('<br>'+InputBar('DhtmlXQ_type','78','\u68CB\u5C40\u7C7B\u578B')+' '+SelectBar('DhtmlXQ_type','71','\u5168\u5C40_\u5E03\u5C40_\u4E2D\u6B8B\u5C40_\u6392\u5C40_\u6C5F\u6E56\u6B8B\u5C40_\u5B9E\u7528\u6B8B\u5C40_\u5B9E\u6218\u6B8B\u5C40','\u66F4\u6539')+SelectPrev('type'));
	S+=(' ' +InputBar('DhtmlXQ_gametype','78','\u68CB\u5C40\u6027\u8D28')+' '+SelectBar('DhtmlXQ_gametype','71','\u6162\u68CB_\u5FEB\u68CB_\u8D85\u5FEB\u68CB_\u672A\u77E5','\u66F4\u6539')+SelectPrev('gametype'));
	S+=('<br>'+InputBar('DhtmlXQ_result','78','\u5BF9\u5C40\u7ED3\u679C')+' '+SelectBar('DhtmlXQ_result','71','\u9ED1\u80DC_\u548C\u68CB_\u7EA2\u80DC_\u672A\u77E5','\u66F4\u6539')+SelectPrev('result'));
	S+=(' ' +InputBar('DhtmlXQ_endtype','78','\u7ED3\u675F\u65B9\u5F0F')+' '+SelectBar('DhtmlXQ_endtype','71','\u8BA4\u8D1F_\u7EDD\u6740_\u5C40\u65F6_\u8BAE\u548C_\u5224\u548C_\u8BFB\u79D2_\u65AD\u7EBF_\u6B65\u65F6_\u5224\u8D1F_\u56F0\u6BD9_\u653E\u5F03_\u8D85\u65F6_\u53D6\u6D88_\u5C01\u5C40_\u672A\u77E5','\u66F4\u6539')+SelectPrev('endtype'));
	S+=('<br>'+InputBar('DhtmlXQ_redeng','155','\u7EA2\u82F1\u6587\u540D')+SelectPrev('redeng'));
	S+=(' ' +InputBar('DhtmlXQ_blackeng','155','\u9ED1\u82F1\u6587\u540D')+SelectPrev('blackeng'));
	S+=('<br>'+InputBar('DhtmlXQ_redrating','155','\u7EA2\u7B49\u7EA7\u5206')+SelectPrev('redrating'));
	S+=(' ' +InputBar('DhtmlXQ_blackrating','155','\u9ED1\u7B49\u7EA7\u5206')+SelectPrev('blackrating'));
	S+=('<br>'+InputBar('DhtmlXQ_redtime','155','\u7EA2\u65B9\u7528\u65F6')+SelectPrev('redtime'));
	S+=(' ' +InputBar('DhtmlXQ_blacktime','155','\u9ED1\u65B9\u7528\u65F6')+SelectPrev('blacktime'));
	S+=('<br>'+InputBar('DhtmlXQ_price','47','\u68CB\u8C31\u4EF7\u683C'));
	S+=(' ' +InputBar('DhtmlXQ_firstnum','42','\u521D\u59CB\u6B65\u6570'));
	S+=(' \u3000'+InputBar('DhtmlXQ_hidden','78','\u662F\u5426\u516C\u5F00')+' '+SelectBar('DhtmlXQ_hidden','71','\u516C\u5F00_\u4FDD\u5BC6_\u901A\u8FC7','\u66F4\u6539'));
	S+=('<br>'+InputBar('DhtmlXQ_oldowner','155','\u68CB\u8C31\u65E7\u4E3B'));
	S+=(' \u3000'+InputBar('tn','78','\u4FDD\u5B58\u68CB\u5E93')+' '+SelectBar('tn','71','u_m_n'));
	S+=('<br>'+InputBar('DhtmlXQ_binit','388','\u521D\u59CB\u5C40\u9762'));
	S+=('<br><a href="javascript:checkError(\'movelist\')" style="'+ST1+'">\u7740\u6CD5\u5E8F\u5217</a>\uFF1A<textarea ondblclick="this.select()" style="'+ST0+'width:'+(CSS1?383:388)+'px;height:88px;overflow-y:scroll;overflow-x:hidden;" name="DhtmlXQ_movelist"></textarea>');
	S+=('<br><a href="javascript:checkError(\'comment\')" style="'+ST1+'">\u68CB\u8C31\u6CE8\u89E3</a>\uFF1A<textarea ondblclick="this.select()" style="'+ST0+'width:'+(CSS1?383:388)+'px;height:88px;overflow-y:scroll;overflow-x:hidden;" name="DhtmlXQ_comment"></textarea></form>');
	S+=('<div style="'+ST1+'margin:3px"><button type="button" id="mySaveB" style="'+ST0+ST2+'width:72px;height:20px;" onclick="save(\'\');">\u4FDD\u5B58\u68CB\u8C31</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="preview();">\u9884\u89C8</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="document.formSave.reset();">\u91CD\u7F6E</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="Delete(250)">\u5220\u9664</button>\u3000<button type="button" style="'+ST0+ST2+'width:48px;height:20px;" onclick="Delete(88)">\u4E22\u5F03</button>\u3000<button type="button" style="'+ST0+ST2+'width:124px;height:20px;" onclick="checkError()">\u68C0\u67E5\u7740\u6CD5\u548C\u6CE8\u89E3</button></div>');
	var w=388,h=108,b=4;
	if (NS.IE&&NS.IE<=6) framePrev='<iframe src="" style="width:'+w+'px;height:'+h+'px;position:absolute;top:0;left:0;border:0;"></iframe>';
	S+=('<div id="prevd0" style="width:'+w+'px;height:'+h+'px;margin-left:63px;position:absolute;background-color:#fff;"><div id="prevIE6" style="width:'+w+'px;height:'+h+'px;position:absolute;top:0;left:0;overflow:hidden;"></div><textarea style="width:'+(w-(CSS1?5:0))+'px;height:'+h+'px;position:absolute;top:0;left:0;overflow:hidden;"></textarea><div style="position:absolute;top:'+b+'px;left:'+b+'px;height:'+(h-b*2)+'px;width:'+(w-b*2)+'px;overflow:hidden;">');
	for (var i=1;i<=5;i++) S+=('<div id="prevd'+i+'" style="'+ST1+'white-space:nowrap;"></div>');
	S+=('<div style="position:absolute;width:'+(w-b*2)+'px;left:0;top:82px;text-align:right;"><a href="javascript:GetTuiYanData()" style="'+ST1+'color:#00f">\u83B7\u53D6\u63A8\u6F14\u68CB\u76D8\u5404\u9879\u6570\u636E</a> <a href="javascript:SetDataPrev(0,0)" style="'+ST1+'color:#00f">\u6E05\u7A7A\u672C\u680F\u6570\u636E</a> <a href="javascript:ClosePrev()" style="'+ST1+'color:#00f">¡Á\u5173\u95ED</a>&nbsp;</div></div></div>');
	S+=('<div id="helpdiv" style="'+ST0+'width:448px;height:'+(h+3)+'px;margin-left:3px;position:absolute;"><textarea id="helpTEXTAREA" style="position:absolute;left:0;top:0;width:'+(CSS1?443:448)+'px;height:'+h+'px;overflow:auto;"></textarea><div></div></div>');
	document.getElementById('divsave').innerHTML='<div style="'+ST1+'">'+S+'</div>';
}
function ClosePrev()
{
	clickPrev='';
	document.getElementById('prevd0').style.top=document.getElementById('helpdiv').offsetTop+'px';
}
function SelectPrev(s,t)
{
	if (t!=1) return '<a href="javascript:SelectPrev(\''+s+'\',1)" style="'+ST1+'">\u2193</a>';
	if (clickPrev==s) {ClosePrev();clickPrev='';return;}
	clickPrev=s;
	var i,j=1,l=parent.UBBS.length-1,s0='';ss='',t='';
	if (parent.name_dhtmlxq_1.location.pathname=='/hldcg/search/DhtmlXQ_www_dpxq_com.htm')
	{
		t=parent.name_dhtmlxq_1.document.formSave.elements['DhtmlXQ_'+s];
		if (t!=null) t=CLS(t.value);
		else t='';
	}
	for (i=l;i>=0;i--)
	{
		if (i==l-10) {i=-1; continue;}
		if (t=='') ss=parent.getvar(parent.UBBS[i],s);
		else {ss=t;t='';}
		if (ss==s0||ss=='') continue;
		else
		{
			document.getElementById('prevd'+j).innerHTML='<a href="javascript:SetDataPrev(\''+s+'\','+j+')" style="display:block;background-color:#fff;'+ST1+'" title="'+ss+'">'+ss+'</a>';
			s0=ss;
			j++;
			if (j>5) i=-1;
		}
	}
	for (;j<=5;j++) document.getElementById('prevd'+j).innerHTML='';
	if (NS.IE&&NS.IE<=6) {if (document.getElementById('prevIE6').innerHTML=='') document.getElementById('prevIE6').innerHTML=framePrev;}
	document.getElementById('prevd0').style.top=document.formSave.elements['DhtmlXQ_'+s].offsetTop-0+(document.formSave.elements['DhtmlXQ_'+s].offsetHeight-0)+2+'px';
}
function SetDataPrev(s,t)
{
	document.formSave.elements['DhtmlXQ_'+(s==0?clickPrev:s)].value=t==0?'':clearHTML(document.getElementById('prevd'+t)).replace(/(^\s+|\s+$)/gi,'');
	ClosePrev();
}
function SetDataSelect(s,t)
{
	document.formSave.elements[s].value=CLS(t);
	if (s=='DhtmlXQ_result')
	{
		var tt=document.formSave.DhtmlXQ_title.value;
		var rn=document.formSave.DhtmlXQ_redname.value;
		var bn=document.formSave.DhtmlXQ_blackname.value;
		var rt=document.formSave.DhtmlXQ_redteam.value;
		var bt=document.formSave.DhtmlXQ_blackteam.value;
		var t3=CLS(rt+' '+rn+' '+'VS'+' '+bt+' '+bn).replace(/\s+/gi,' ');
		var t2=CLS(rt+' '+rn+' '+'\u80DC'+' '+bt+' '+bn).replace(/\s+/gi,' ');
		var t1=CLS(rt+' '+rn+' '+'\u548C'+' '+bt+' '+bn).replace(/\s+/gi,' ');
		var t0=CLS(rt+' '+rn+' '+'\u8D1F'+' '+bt+' '+bn).replace(/\s+/gi,' ');
		if (tt==t3||tt==t2||tt==t1||tt==t0)
		{
			t=CLS(rt+' '+rn+' '+g_result(CLS(t))+' '+bt+' '+bn).replace(/\s+/gi,' ');
			document.formSave.DhtmlXQ_title.value=t;
		}
	}
}
function GetTuiYanData()
{
	var t='';
	if (parent.name_dhtmlxq_1.location.pathname=='/hldcg/search/DhtmlXQ_www_dpxq_com.htm')
	{
		t=parent.name_dhtmlxq_1.document.formSave.elements['DhtmlXQ_'+clickPrev];
		if (t!=null) t='ok';
		else {t='';showalert('\u63A8\u6F14\u68CB\u76D8\u51FA\u9519');}
	}
	else showalert('\u8BF7\u5148\u6253\u5F00\u63A8\u6F14\u68CB\u76D8\u9875\u9762\u540E\u518D\u83B7\u53D6\u6570\u636E');
	if (t=='') return;
	var D ='class,event,refer,other,judge,record,remark,author,redteam,redname,redlevel,blackteam,blackname,blacklevel';
	    D+=',date,place,round,timerule,group,table,type,gametype,result,endtype,redeng,blackeng,redrating,blackrating,redtime,blacktime,price,firstnum,hidden,oldowner';
	    D =D.split(',');
	for (var i=0;i<D.length;i++)
	{
		t=CLS(parent.name_dhtmlxq_1.document.formSave.elements['DhtmlXQ_'+D[i]].value);
		if (t!='') document.formSave.elements['DhtmlXQ_'+D[i]].value=t;
	}
	ClosePrev();
}
function clearHTML(obj)
{
	return document.all?obj.innerText:obj.textContent;
}
function SelectBar(v,w,c,t)
{
	var s='<select id="'+v+'_sbar" onchange="SetDataSelect(\''+v+'\',this.options[this.selectedIndex].value)" size="1" style="'+ST1+'height:20px;width:'+w+'px;margin:0px;">';
	if (t) s+='<option value="">'+t+'</option>';
	c=c.split('_');
	for (i=0;i<c.length;i++) s+='<option value="'+c[i]+'">'+c[i]+'</option>';
	s+='</select>';
	return s;
}
function InputBar(v,w,c,t)
{
	var d='ondblclick="this.select()"';
	if (v=='DhtmlXQ_class') d='ondblclick="this.value=\'\u5176\u4ED6\u8D5B\u4E8B\'"';
	else if (v=='DhtmlXQ_event') d='ondblclick="this.value=this.value.replace(/(^\\d{2,4})\u5E74?/gi,\'$1\u5E74\')"';
	else if (v=='DhtmlXQ_redname'||v=='DhtmlXQ_redteam'||v=='DhtmlXQ_blackname'||v=='DhtmlXQ_blackteam') d='ondblclick="cTeamName(\''+v+'\')"';
	else if (v=='DhtmlXQ_open') d='ondblclick="this.value=\'\'"';
	var s=((!t)?c:('<a style="'+ST1+'" href="javascript:'+t+'()">'+c+'</a>'))+'\uFF1A<input type="text" value="" '+d+' style="'+ST1+'height:'+(CSS1?16:20)+'px;width:'+(w-(CSS1?4:0))+'px;" name="'+v+'">';
	return s;
}
function cTeamName(v)
{
	v=(v=='DhtmlXQ_redname'||v=='DhtmlXQ_redteam')?'red':'black';
	var t=document.formSave.elements['DhtmlXQ_'+v+'team'];
	var n=document.formSave.elements['DhtmlXQ_'+v+'name'];
	v=t.value;
	t.value=n.value;
	n.value=v;
}
function getANIGIF()
{
	parent.search_end_pos.location.href='gif.asp';
}
function EditSave()
{
	//\u6E05\u9664\u5B9A\u65F6\u5668
	clearInterval(Livetimer);
	clearInterval(timer);
	allowlr=false;
	ViewUrl=getvar('viewurl');
	var tn=ViewUrl.match(/owner=[^&]+/gi);
	if (tn==null) tn='u';
	else
	{
		tn=tn[0].substr(6);
		if (tn=='b'||tn=='%B5%CD%D3%DA24%B2%BD') tn='b';
		else if (tn=='m'||tn=='%B4%F3%CA%A6%B6%D4%BE%D6') tn='m';
		else if (tn=='n'||tn=='%CD%F8%C2%E7%C8%FC%CA%C2') tn='n';
		else if (tn=='t'||tn=='%B6%A5%BC%E2%B6%D4%BE%D6') tn='t';
		else if (tn=='o'||tn=='%C6%E4%CB%FB%B6%D4%BE%D6') tn='o';
		else if (tn=='k'||tn=='%B6%A5%BC%E2%BF%EC%C6%E5') tn='k';
		else if (tn=='x') tn='x';
		else tn='u';
	}
	var red=g_rb('red');
	var redteam=red[0];
	var redname=red[1];
	var redlevel=red[2];
	var black=g_rb('black');
	var blackteam=black[0];
	var blackname=black[1];
	var blacklevel=black[2];
	var DhtmlXQ_comment=UBB.match(eval('/\\[(DhtmlXQ_comment\\d+(_\\d+)?)\\].+'+REOK+'\\[\\/\\1\\]/gi'));
	DhtmlXQ_comment=(DhtmlXQ_comment==null)?'':DhtmlXQ_comment.join('\r\n').replace(/\|+\[\/DhtmlXQ_comment/gi,'[/DhtmlXQ_comment').replace(/\[DhtmlXQ_comment0_(\d+)\](.+)\[\/DhtmlXQ_comment0_\1\]/gi,'[DhtmlXQ_comment$1]$2[/DhtmlXQ_comment$1]');
	var DhtmlXQ_movelist=UBB.match(eval('/\\[(DhtmlXQ_move(list|_\\d+_\\d+_\\d+))\\]\\d{4}.*'+REOK+'\\[\\/\\1\\]/gi'));
	DhtmlXQ_movelist=(DhtmlXQ_movelist==null)?'':DhtmlXQ_movelist.join('\r\n').replace(/\[DhtmlXQ_move_0_1_0\](.*)\[\/DhtmlXQ_move_0_1_0\]/gi,'[DhtmlXQ_movelist]$1[/DhtmlXQ_movelist]');
	if (DhtmlXQ_movelist.search(/^\[DhtmlXQ_movelist\].*\[\/DhtmlXQ_movelist\]$/gi)!=-1)
		DhtmlXQ_movelist=DhtmlXQ_movelist.replace(/^\[DhtmlXQ_movelist\](.*)\[\/DhtmlXQ_movelist\]$/gi,'$1');
	var DhtmlXQ_id=ViewUrl.match(/id=\d{1,9}/gi);
	DhtmlXQ_id=(DhtmlXQ_id==null)?0:DhtmlXQ_id[0].substr(3);
	var DhtmlXQ_owner=GetCookie('dpxqvipuser');
	var DhtmlXQ_ownerpass=GetCookie('dpxqvippass');
	document.formSave.DhtmlXQ_owner.value=DhtmlXQ_owner;
	document.formSave.DhtmlXQ_ownerpass.value=DhtmlXQ_ownerpass;
	document.formSave.DhtmlXQ_id.value=DhtmlXQ_id;
	var oldowner=getvar('oldowner');
	if (DhtmlXQ_owner=='\u4E1C\u840D\u516C\u53F8')
		document.formSave.tn.value=tn;
	else if (oldowner==''||oldowner=='u'||oldowner=='w')
		document.formSave.tn.value=tn;
	else if ((oldowner==DhtmlXQ_owner)&&((tn=='u')||(tn!='u'&&getvar('hidden')=='1')))
		document.formSave.tn.value=tn;
	else
	{
		document.formSave.tn.value='u';
		document.formSave.DhtmlXQ_id.value='0';
	}
	if (tn=='b'||tn=='t'||tn=='o'||tn=='k')
	{
		document.formSave.tn.value='u';
		document.formSave.DhtmlXQ_id.value='0';
	}
	document.formSave.DhtmlXQ_sortid.value=getvar('sortid');
	document.formSave.DhtmlXQ_oldowner.value=getvar('oldowner');
	document.formSave.DhtmlXQ_title.value=getvar('title');
	document.formSave.DhtmlXQ_class.value=(oldowner==DhtmlXQ_owner)?getvar('class'):getvar('class').replace(/^\s*\u5BF9\u5C40\u76F4\u64AD\s*$/gi,'\u5BF9\u5C40\u76F4\u64AD\u9700\u60A8\u91CD\u8BBE');
	document.formSave.DhtmlXQ_open.value=getvar('open');
	document.formSave.DhtmlXQ_author.value=getvar('author');
	document.formSave.DhtmlXQ_type.value=getvar('type');
	document.formSave.DhtmlXQ_gametype.value=getvar('gametype');
	document.formSave.DhtmlXQ_result.value=getvar('result');
	document.formSave.DhtmlXQ_endtype.value=getvar('endtype');
	document.formSave.DhtmlXQ_judge.value=getvar('judge');
	document.formSave.DhtmlXQ_record.value=getvar('record');
	document.formSave.DhtmlXQ_remark.value=getvar('remark');
	document.formSave.DhtmlXQ_event.value=getvar('event');
	document.formSave.DhtmlXQ_round.value=getvar('round');
	document.formSave.DhtmlXQ_group.value=getvar('group');
	document.formSave.DhtmlXQ_table.value=getvar('table');
	document.formSave.DhtmlXQ_date.value=getvar('date');
	document.formSave.DhtmlXQ_place.value=getvar('place');
	document.formSave.DhtmlXQ_timerule.value=getvar('timerule');
	document.formSave.DhtmlXQ_redeng.value=getvar('redeng');
	document.formSave.DhtmlXQ_blackeng.value=getvar('blackeng');
	document.formSave.DhtmlXQ_redname.value=redname;
	document.formSave.DhtmlXQ_blackname.value=blackname;
	document.formSave.DhtmlXQ_redteam.value=redteam;
	document.formSave.DhtmlXQ_blackteam.value=blackteam;
	document.formSave.DhtmlXQ_redlevel.value=redlevel;
	document.formSave.DhtmlXQ_blacklevel.value=blacklevel;
	document.formSave.DhtmlXQ_redrating.value=getvar('redrating');
	document.formSave.DhtmlXQ_blackrating.value=getvar('blackrating');
	document.formSave.DhtmlXQ_redtime.value=getvar('redtime');
	document.formSave.DhtmlXQ_blacktime.value=getvar('blacktime');
	document.formSave.DhtmlXQ_refer.value=getvar('refer');
	document.formSave.DhtmlXQ_other.value=getvar('other').replace('\u6742\u5FD7||\u835F\u8403','\u6742\u5FD7 \u835F\u8403');
	document.formSave.DhtmlXQ_price.value=(getvar('price')=='')?'1':getvar('price');
	document.formSave.DhtmlXQ_firstnum.value=(getvar('firstnum')=='')?'0':getvar('firstnum');
	document.formSave.DhtmlXQ_hidden.value=(getvar('hidden')=='')?'0':getvar('hidden');
	document.formSave.DhtmlXQ_binit.value=getvar('binit').replace(/\D/gi,'9');
	document.formSave.DhtmlXQ_movelist.value=DhtmlXQ_movelist;
	document.formSave.DhtmlXQ_comment.value=DhtmlXQ_comment;
	document.getElementById('mySaveB').value=DhtmlXQ_owner=='\u4E1C\u840D\u516C\u53F8'?'\u81EA\u7531\u4FDD\u5B58':'\u4FDD\u5B58\u68CB\u8C31';
	document.getElementById('divsave').style.display='';
	if (isSP) {var l=parent.UBBS.length;if(l>=10)parent.UBBS[l-10]='';parent.UBBS[l]=UBB;}
	editNow='edit';
}
function checkmove()
{
	var movestr=document.formSave.DhtmlXQ_movelist.value;
	var position=document.formSave.DhtmlXQ_binit.value;
	var endtype=document.formSave.DhtmlXQ_endtype.value;
	document.formSave.DhtmlXQ_binit.value=position.replace(/\D/gi,'9');
	if (movestr.search(/\D/gi)==-1)
	{
		var movestrlength='DhtmlXQ_comment'+parseInt(movestr.length/4)+']';
		var movelist=getMovelistString(movestr,position);
		var movelength='DhtmlXQ_comment'+parseInt(movelist.length/12)+']';
		document.formSave.DhtmlXQ_movelist.value=movelist;
		document.formSave.DhtmlXQ_comment.value=document.formSave.DhtmlXQ_comment.value.replace(movestrlength,movelength).replace('['+movelength+endtype+'[/'+movelength,'');
	}
	else
	{
		var movelength=parseInt(movestr.length/12);
		var movelist=movestr.substr(0,movelength*12);
		for (i=0;i<movelength;i++)
			if ((movelist.substr((i*12+8),4)-0)!=i) i=20000;
		if(i<20000) movelist=movelist.replace(/(\d{4})\w{8}/gi,'$1');
		document.formSave.DhtmlXQ_movelist.value=movelist;
		document.formSave.DhtmlXQ_comment.value=document.formSave.DhtmlXQ_comment.value.replace('[DhtmlXQ_comment'+movelength+']'+endtype+'[/DhtmlXQ_comment'+movelength+']','');
	}
}
function save(t)
{
	if (document.formSave.tn.value=='x') t='x';
	else if (t=='') t=document.getElementById('mySaveB').value=='\u81EA\u7531\u4FDD\u5B58'?document.formSave.tn.value:'u';
	if (document.formSave.DhtmlXQ_title.value=='') showalert('\u68CB\u5C40\u6807\u9898\u4E0D\u80FD\u4E3A\u7A7A');
	else if (document.formSave.DhtmlXQ_class.value.substr(0,1)=='\u6309') showalert('\u68CB\u5C40\u5206\u7C7B\u4E0D\u80FD\u4EE5[\u6309]\u5B57\u6253\u5934');
	else if (t=='u'||t=='m'||t=='n'||t=='x'||t=='b')
	{
		if(document.formSave.tn.value!=t) document.formSave.DhtmlXQ_id.value=0;
		document.formSave.tn.value=t;
		switch(document.formSave.DhtmlXQ_hidden.value)
		{
			case '\u4FDD\u5BC6':
			case '1':
				document.formSave.DhtmlXQ_hidden.value=1;break;
			case '\u901A\u8FC7':
			case '100':
				document.formSave.DhtmlXQ_hidden.value=100;break;
			case '\u5220\u9664':
			case '250':
				document.formSave.DhtmlXQ_hidden.value=250;break;
			case '\u4E22\u5F03':
			case '88':
				document.formSave.DhtmlXQ_hidden.value=88;break;
			default:
				document.formSave.DhtmlXQ_hidden.value=0;
		}
		if (t=='m')
		{
			if (document.formSave.DhtmlXQ_owner.value=='')     t+=('\u60A8\u7684\u540D\u79F0');
			if (document.formSave.DhtmlXQ_class.value=='')     t+=('\u68CB\u5C40\u5206\u7C7B');
			if (document.formSave.DhtmlXQ_event.value=='')     t+=('\u8D5B\u4E8B\u540D\u79F0');
			if (document.formSave.DhtmlXQ_redteam.value=='')   t+=('\u7EA2\u65B9\u56E2\u4F53');
			if (document.formSave.DhtmlXQ_redname.value=='')   t+=('\u7EA2\u65B9\u59D3\u540D');
			if (document.formSave.DhtmlXQ_blackteam.value=='') t+=('\u9ED1\u65B9\u56E2\u4F53');
			if (document.formSave.DhtmlXQ_blackname.value=='') t+=('\u9ED1\u65B9\u59D3\u540D');
			if (document.formSave.DhtmlXQ_type.value=='')      t+=('\u68CB\u5C40\u7C7B\u578B');
			if (document.formSave.DhtmlXQ_gametype.value=='')  t+=('\u68CB\u5C40\u6027\u8D28');
			if (document.formSave.DhtmlXQ_result.value=='')    t+=('\u5BF9\u5C40\u7ED3\u679C');
			if (document.formSave.DhtmlXQ_movelist.value=='')  t+=('\u7740\u6CD5\u5E8F\u5217');
			if (t!='m') {showalert('\u89C4\u8303\u5927\u5E08\u5BF9\u5C40\u6570\u636E\uFF0C\u8BF7\u5C06<span style="color:#f00">'+t.substr(1).replace(/(.{4})/gi,'\uFF0C$1').substr(1)+'</span>\u680F\u76EE\u6570\u636E\u586B\u5199\u5B8C\u6BD5\uFF0C\u70B9\u76F8\u5E94\u680F\u76EE\u6807\u9898\u6587\u5B57\u5FEB\u901F\u5F55\u5165\u9884\u8BBE\u6570\u636E|g_hide("fastlink.htm#")');return;}
		}
		document.formSave.DhtmlXQ_result.value=g_result(document.formSave.DhtmlXQ_result.value);
		t=(document.formSave.DhtmlXQ_binit.value.replace(/\D/gi,'9')+'8979695949392919097717866646260600102030405060708012720323436383').substr(0,64);
		document.formSave.DhtmlXQ_binit.value=(CP(t)=='8979695949392919097717866646260600102030405060708012720323436383')?'':t;
		setRefer();
		if (!isSP) {showalert('\u975E\u4E2D\u56FD\u8C61\u68CB\u68CB\u8C31\u4ED3\u5E93\u7F51\u7AD9\uFF0C\u6682\u65F6\u65E0\u6CD5\u4F7F\u7528\u6B64\u529F\u80FD');return;}
		document.formSave.submit();
	}
}
function setRefer()
{
	var o1=document.formSave.DhtmlXQ_owner.value;
	var o2=document.formSave.DhtmlXQ_oldowner.value;
	var r=document.formSave.DhtmlXQ_refer.value.replace(/^\s+|\s+$/gi,'');
	if (r==''&&o2!=''&&o1!=o2) {document.formSave.DhtmlXQ_refer.value=o2;r=o2;}
	if (r.search(/^https?\:\/\/[^\/]+\/?.*$/gi)!=-1)
		document.formSave.DhtmlXQ_refer.value=escape(r.replace(/^(https?\:\/\/[^\/]+)\/?.*$/gi,'$1')+'\r\n'+r);
}
function getvarArray(t,v)
{
	var r=eval('/\\[(DhtmlXQ_'+v+')\\](.*'+REOK+')\\[\\/\\1\\]/gi');
	var s=t.match(r);
	if (s==null) return '';
	for (var i=0;i<s.length;i++) s[i]=s[i].replace(r,'$2');
	return s;
}
function checkDhtmlXQ(s)
{
	return s.replace(/\[\/?DhtmlXQ\w*\]/gi,'\u3010$1\u3011');
}
function checkRegExp()
{
	var r='';
	try {r=new RegExp('.+?','gi');r='?';}catch(e){}
	return r;
}
function checkError(s)
{
	var i,j,k,t,err;
	document.getElementById('helpTEXTAREA').value='';
	if (s!='movelist') //\u68C0\u67E5\u6CE8\u89E3\u9519\u8BEF
	{
		var comm=document.formSave.DhtmlXQ_comment.value;
		comm=CLS(comm).replace(/[\x00-\x09\x0B\x0C\x0E-\x1F]+/gi,' ').replace(/[\r\n]+/gi,'\n');
		comm=comm.replace(/(\[\/DhtmlXQ_comment(\d+_)*\d+\]).{0,4}(\[DhtmlXQ_comment(\d+_)*\d+\])/gi,'$1\n$3');
		err='\u6CE8\u89E3\u5171'+comm.length+'\u5B57\u7B26\uFF0C\u6700\u591A64000\u5B57\u7B26\r\n';
		if (comm.length>64000)
		{
			err+='\u6CE8\u89E3\u957F\u5EA6\u5927\u4E8E64000\uFF0C\u4E0D\u5F71\u54CD\u770B\u68CB\u8C31\uFF0C\u4F46\u4FDD\u5B58\u68CB\u8C31\u65F6\u53EA\u80FD\u5B58\u5165\u524D64000\u4E2A\u5B57\u7B26\r\n';
			//comm=comm.substr(0,64000);
		}
		var comm_new='';
		var comm_array=[];
		var comm_tmp=comm.match(/\[DhtmlXQ_comment(\d+(_\d+)?)\]/gi);
		if (comm_tmp==null)
		{
			if (comm.length>0) err+='\u672A\u627E\u5230\u4EFB\u4F55\u7B26\u5408\u8981\u6C42\u7684\u68CB\u8C31\u6CE8\u89E3\r\n';
			else err+='\u672C\u68CB\u8C31\u65E0\u6CE8\u89E3\r\n';
		}
		else
		{
			for (i=0;i<comm_tmp.length;i++)
			{
				comm_tmp[i]=comm_tmp[i].replace(/\[DhtmlXQ_comment(\d+(_\d+)?)\]/gi,'comment$1');
				if (!comm_array[comm_tmp[i]])
				{
					t=getvarArray(comm,comm_tmp[i]);
					if (t=='')
					{
						t='';
					}
					else if (t.length>1)
					{
						err+='\u53D1\u73B0\u91CD\u590D\u7684['+(t.length)+']\u4E2A\u6CE8\u89E3\u9879\u76EE[DhtmlXQ_'+comm_tmp[i]+']\uFF0C\u5DF2\u81EA\u52A8\u5408\u5E76\u6210\u4E00\u4E2A\r\n';
						for (j=0;j<t.length;j++)
						{
							for (k=0;k<j;k++)
							{
								if (t[k]==t[j])
								{
									t[j]='\t';
									k=j;
								}
							}
						}
						t=t.join('||').replace(/\|\|\t/gi,'');
					}
					else
					{
						t=t[0];
					}
					k=t;
					t=t.replace(eval('/\\[(DhtmlXQ\\w+)\\].+'+REOK+'\\[\\/\\1\\]/gi'),'').replace(/\[(\/?DhtmlXQ\w*)\]/gi,'\u3010$1\u3011').replace(/\[(\/?DhtmlXQ)/gi,'\u3010$1');
					if (k!=t) err+='\u53D1\u73B0\u6CE8\u89E3\u4E2D\u542B\u6709\u5176\u4ED6[DhtmlXQ]\u9879\u76EE\uFF0C\u5DF2\u81EA\u52A8\u6E05\u9664\r\n';
					comm_array[comm_tmp[i]]=t;
					if (t=='') err+='\u53D1\u73B0\u4E0D\u5B8C\u6574\u7684\u6CE8\u89E3\u9879\u76EE[DhtmlXQ_'+comm_tmp[i]+']\uFF0C\u5DF2\u81EA\u52A8\u4E22\u5F03\r\n';
					else comm_new+='\r\n[DhtmlXQ_'+comm_tmp[i]+']'+t+'[/DhtmlXQ_'+comm_tmp[i]+']';
				}
			}
			comm_new=CLS(comm_new);
		}
		if (comm_new.replace(/[\r\n]/gi,'')==comm.replace(/[\r\n]/gi,'')) err+='\u672A\u53D1\u73B0\u4EFB\u4F55\u6CE8\u89E3\u9519\u8BEF\r\n';
		document.formSave.DhtmlXQ_comment.value=comm_new;
		document.getElementById('helpTEXTAREA').value=err;
	}
	if (s!='comment')  //\u68C0\u67E5\u7740\u6CD5\u9519\u8BEF
	{
		var move=document.formSave.DhtmlXQ_movelist.value;
		move=CLS(move).replace(/[^\w\_\/\[\]\r\n]+/gi,'').replace(/[\r\n]+/gi,'\n'); //IE5\u6B64\u65F6\u5C45\u7136\w\u4E0D\u542B\u4E0B\u5212\u7EBF\uFF1F
		err='\u7740\u6CD5\u5171'+move.length+'\u5B57\u7B26\uFF0C\u6700\u591A64000\u5B57\u7B26\r\n';
		if (move.length>64000)
		{
			err+='\u7740\u6CD5\u957F\u5EA6\u5927\u4E8E64000\uFF0C\u4E0D\u5F71\u54CD\u770B\u68CB\u8C31\uFF0C\u4F46\u4FDD\u5B58\u68CB\u8C31\u65F6\u53EA\u80FD\u5B58\u5165\u524D64000\u4E2A\u5B57\u7B26\r\n';
			//move=move.substr(0,64000);
		}
		var move_new='';
		var move_array=[];
		var move_tmp=move.match(/\[DhtmlXQ_move(list|_\d+_\d+_\d+)\]/gi);
		if (move_tmp==null)
		{
			move_new='';
		}
		else
		{
			for (i=0;i<move_tmp.length;i++)
			{
				move_tmp[i]=move_tmp[i].replace(/\[DhtmlXQ_move(list|_\d+_\d+_\d+)\]/gi,'move$1');
				if (!move_array[move_tmp[i]])
				{
					t=getvarArray(move,move_tmp[i]);
					if (t=='')
					{
						t='';
					}
					else if (t.length>1)
					{
						err+='\u53D1\u73B0\u91CD\u590D\u7684['+(t.length)+']\u4E2A\u7740\u6CD5\u9879\u76EE[DhtmlXQ_'+move_tmp[i]+']\uFF0C\u5DF2\u81EA\u52A8\u4F7F\u7528\u7B2C\u4E00\u4E2A\r\n';
						k=0;
						for (j=0;j<t.length;j++)
						{
							if (k==1) t[j]='';
							else
							{
								k=t[j].match(/^(\d{4})+/gi)
								if (k==null) t[j]='';
								else
								{
									if (k[0]!=t[j]) err+='\u68CB\u8C31\u7740\u6CD5\u542B\u591A\u4F59\u5B57\u7B26\uFF0C\u5DF2\u81EA\u52A8\u6E05\u9664\r\n';
									t[j]=k[0];
									k=1;
								}
							}
						}
						t=t.join('');
					}
					else
					{
						k=t[0].match(/^(\d{4})+/gi);
						if (k==null) t='';
						else
						{
							if (k[0]!=t[0]) err+='\u68CB\u8C31\u7740\u6CD5\u542B\u591A\u4F59\u5B57\u7B26\uFF0C\u5DF2\u81EA\u52A8\u6E05\u9664\r\n';
							t=k[0];
						}
					}
					move_array[move_tmp[i]]=t;
					if (t=='') err+='\u53D1\u73B0\u4E0D\u5B8C\u6574\u7684\u7740\u6CD5\u9879\u76EE[DhtmlXQ_'+move_tmp[i]+']\uFF0C\u5DF2\u81EA\u52A8\u4E22\u5F03\r\n';
					else move_new+='\r\n[DhtmlXQ_'+move_tmp[i]+']'+t+'[/DhtmlXQ_'+move_tmp[i]+']';
				}
			}
			move_new=CLS(move_new);
		}
		if (move=='') err+='\u672C\u68CB\u8C31\u65E0\u7740\u6CD5\r\n';
		else if (move_new=='')
		{
			k=move.match(/^(\d{4})+/gi);
			if (k==null)
			{
				move_new='';
				err+='\u672A\u627E\u5230\u4EFB\u4F55\u7B26\u5408\u8981\u6C42\u7684\u68CB\u8C31\u7740\u6CD5\r\n';
			}
			else
			{
				move_new=k[0];
				if (move_new!=move) err+='\u68CB\u8C31\u7740\u6CD5\u542B\u591A\u4F59\u5B57\u7B26\uFF0C\u5DF2\u81EA\u52A8\u6E05\u9664\r\n';
			}
		}
		if (move_new.replace(/[\r\n]/gi,'')==move.replace(/[\r\n]/gi,'')) err+='\u672A\u53D1\u73B0\u4EFB\u4F55\u7740\u6CD5\u9519\u8BEF\r\n';
		else document.formSave.DhtmlXQ_movelist.value=move_new;
		document.getElementById('helpTEXTAREA').value+=err;
	}
}
function preview()
{
	setRefer();
	var S='[DhtmlXQ]<br>[DhtmlXQ_ver]www_dpxq_com[/DhtmlXQ_ver]<br>[DhtmlXQ_init]500,350[/DhtmlXQ_init]<br>[DhtmlXQ_owner]'+checkDhtmlXQ(document.formSave.elements[0].value)+'[/DhtmlXQ_owner]<br>';
	if (document.formSave.DhtmlXQ_id.value!='') S+='[DhtmlXQ_viewurl]'+checkDhtmlXQ('owner='+document.formSave.tn.value+'&id='+document.formSave.DhtmlXQ_id.value)+'[/DhtmlXQ_viewurl]<br>'
	var D='sortid,title,class,event,open,refer,other,judge,record,remark,author'.split(',');
	for (i=0;i<D.length;i++) S+=('[DhtmlXQ_'+D[i]+']'+checkDhtmlXQ(document.formSave.elements['DhtmlXQ_'+D[i]].value)+'[/DhtmlXQ_'+D[i]+']<br>');
	var R_team =CLS(checkDhtmlXQ(document.formSave.elements['DhtmlXQ_redteam'].value));
	var R_name =CLS(checkDhtmlXQ(document.formSave.elements['DhtmlXQ_redname'].value));
	var R_level=CLS(checkDhtmlXQ(document.formSave.elements['DhtmlXQ_redlevel'].value));
	var B_team =CLS(checkDhtmlXQ(document.formSave.elements['DhtmlXQ_blackteam'].value));
	var B_name =CLS(checkDhtmlXQ(document.formSave.elements['DhtmlXQ_blackname'].value));
	var B_level=CLS(checkDhtmlXQ(document.formSave.elements['DhtmlXQ_blacklevel'].value));
	var R_str=CLS((R_team+' '+R_name+' ('+R_level+')').replace(/\(\s*\)/gi,''));
	var B_str=CLS((B_team+' '+B_name+' ('+B_level+')').replace(/\(\s*\)/gi,''));
	S+=('[DhtmlXQ_red]'+R_str+'[/DhtmlXQ_red]<br>');
	S+=('[DhtmlXQ_black]'+B_str+'[/DhtmlXQ_black]<br>');
	S+=('[DhtmlXQ_redteam]'+R_team+'[/DhtmlXQ_redteam]<br>');
	S+=('[DhtmlXQ_redname]'+R_name+'[/DhtmlXQ_redname]<br>');
	S+=('[DhtmlXQ_redlevel]'+R_level+'[/DhtmlXQ_redlevel]<br>');
	S+=('[DhtmlXQ_blackteam]'+B_team+'[/DhtmlXQ_blackteam]<br>');
	S+=('[DhtmlXQ_blackname]'+B_name+'[/DhtmlXQ_blackname]<br>');
	S+=('[DhtmlXQ_blacklevel]'+B_level+'[/DhtmlXQ_blacklevel]<br>');
	var D='date,place,round,timerule,group,table,type,gametype,result,endtype,redeng,blackeng,redrating,blackrating,redtime,blacktime,price,firstnum,hidden,oldowner,binit'.split(',');
	for (i=0;i<D.length;i++) S+=('[DhtmlXQ_'+D[i]+']'+checkDhtmlXQ(document.formSave.elements['DhtmlXQ_'+D[i]].value)+'[/DhtmlXQ_'+D[i]+']<br>');
	var DhtmlXQ_movelist=document.formSave.elements['DhtmlXQ_movelist'].value.replace(/\[DhtmlXQ_move_0_1_0\](.*)\[\/DhtmlXQ_move_0_1_0\]/gi,'[DhtmlXQ_movelist]$1[/DhtmlXQ_movelist]');
	if (DhtmlXQ_movelist.search(/\[DhtmlXQ_move(list|_\d+_\d+_\d+)\].*\[\/DhtmlXQ_move\1\]/gi)==-1)
		DhtmlXQ_movelist='[DhtmlXQ_movelist]'+DhtmlXQ_movelist+'[/DhtmlXQ_movelist]';
	S+=(DhtmlXQ_movelist.replace(/[\r\n]+/gi,'<br>')+'<br>');
	S+=(document.formSave.elements['DhtmlXQ_comment'].value.replace(/[\r\n]+/gi,'<br>')+'<br>[/DhtmlXQ]');
	S=S.replace(/\[\].{0,3}\[\/\]/gi,'').replace(/\[(DhtmlXQ_\w+)\]0?\[\/\1\]/gi,'').replace(/\](<br>)+\[/gi,']<br>\r\n[');
	UpData();
	UBB=S.match(eval('/\\[(DhtmlXQ_\\w+)\\].+'+REOK+'\\[\\/\\1\\]/gi')).join('\r\n');
	initdata();
	editNow='';
	document.getElementById('divsave').style.display='none';
}
function Checkstr(Str)
{
	return Str.replace(/\x00/gi,'');
}
function g_clearid()
{
	document.formSave.DhtmlXQ_id.value='';
}
function g_live(c)
{
	if (document.formSave.DhtmlXQ_owner.value=='') showalert('\u5FC5\u987B\u586B\u5199\u60A8\u7684\u540D\u79F0\uFF01\u56E0\u4E3A\u60A8\u5C06\u4F5C\u4E3A\u672C\u5BF9\u5C40\u7684\u76F4\u64AD\u7BA1\u7406\u5458\uFF01');
	else if (!c) showalert('<div style="text-align:left;">\u4E00\u3001\u5199\u597D\u6807\u9898[\u5FC5\u987B]\u548C\u5176\u4ED6\u8D44\u6599[\u53EF\u9009]\u540E\u4FDD\u5B58\u68CB\u8C31<br>\u4E8C\u3001\u67E5\u770B\u521A\u4FDD\u5B58\u7684\u68CB\u8C31\uFF0C\u76F4\u64AD\u5458\u5728\u68CB\u76D8\u4E0A\u8D70\u68CB\uFF0C\u89C2\u6218\u8005\u68CB\u8C31\u5C06\u81EA\u52A8\u66F4\u65B0<br>\u4E09\u3001\u5BFC\u51FAUBB\u4EE3\u7801\u6216\u5176\u4ED6\u683C\u5F0F\u4EE3\u7801\uFF0C\u53D1\u5230\u652F\u6301\u52A8\u6001\u68CB\u76D8\u7684\u7F51\u7AD9\u5373\u53EF\u76F4\u64AD</div>|g_live("\u5BF9\u5C40\u76F4\u64AD")');
	else {document.formSave.DhtmlXQ_class.value=c;}
}
function g_rbt(y)
{
	if (y==1)
	{
		g_update('DhtmlXQ_result',document.getElementById('rbt_re').value);
		g_update('DhtmlXQ_redteam',document.getElementById('r_team').value);
		g_update('DhtmlXQ_redname',document.getElementById('r_name').value);
		g_update('DhtmlXQ_redlevel',document.getElementById('r_rank').value);
		g_update('DhtmlXQ_blackteam',document.getElementById('b_team').value);
		g_update('DhtmlXQ_blackname',document.getElementById('b_name').value);
		g_update('DhtmlXQ_blacklevel',document.getElementById('b_rank').value);
		return;
	}
	var r,result;
	var t=CLS(document.formSave.DhtmlXQ_title.value.replace(/\s+/ig,' ')).replace(/\u7EA2?(\u5148\u80DC|\u5148\u8D1F|\u5148\u548C)/gi,' $1 ');
	r=eval(/[\- ]+[\(\[]?((\d*\.)?\d+ ?[\+\-\=\:] ?(\d*\.)?\d+|\u7EA2\u80DC|\u9ED1\u8D1F|\u5148\u80DC|\u540E\u8D1F|\u7EA2\u5148\u80DC|\u7EA2\u65B9\u80DC|\u9ED1\u65B9\u8D1F|\u9ED1\u540E\u8D1F|\u9ED1\u65B9\u8BA4\u8D1F|\u9ED1\u65B9\u6295\u5B50\u8BA4\u8D1F|\u80DC|\u7EA2\u52DD|\u9ED1\u8CA0|\u5148\u52DD|\u5F8C\u8CA0|\u7D05\u5148\u52DD|\u7D05\u65B9\u52DD|\u9ED1\u65B9\u8CA0|\u9ED1\u5F8C\u8CA0|\u9ED1\u65B9\u8A8D\u8CA0|\u9ED1\u65B9\u6295\u5B50\u8A8D\u8CA0|\u52DD|\u9ED1\u80DC|\u7EA2\u8D1F|\u5148\u8D1F|\u540E\u80DC|\u7EA2\u5148\u8D1F|\u7EA2\u65B9\u8D1F|\u9ED1\u65B9\u80DC|\u9ED1\u540E\u80DC|\u7EA2\u65B9\u8BA4\u8D1F|\u7EA2\u65B9\u6295\u5B50\u8BA4\u8D1F|\u8D1F|\u9ED1\u52DD|\u7D05\u8CA0|\u5148\u8CA0|\u5F8C\u52DD|\u7D05\u5148\u8CA0|\u7D05\u65B9\u8CA0|\u9ED1\u65B9\u52DD|\u9ED1\u5F8C\u52DD|\u7D05\u65B9\u8A8D\u8CA0|\u7D05\u65B9\u6295\u5B50\u8A8D\u8CA0|\u8CA0|\u548C\u68CB|\u548C\u5C40|\u8BAE\u548C|\u8B70\u548C|\u5148\u548C|\u540E\u548C|\u5F8C\u548C|\u7EA2\u548C|\u7D05\u548C|\u9ED1\u548C|\u7EA2\u5148\u548C|\u7D05\u5148\u548C|\u9ED1\u5148\u548C|\u7EA2\u540E\u548C|\u7D05\u5F8C\u548C|\u9ED1\u540E\u548C|\u9ED1\u5F8C\u548C|\u7EA2\u65B9\u548C|\u7D05\u65B9\u548C|\u9ED1\u65B9\u548C|\u53CC\u65B9\u8BAE\u548C|\u96D9\u65B9\u8B70\u548C|\u548C|\u5BF9|\u5C0D|VS)[\)\]]?[\- ]+/gi);
	if (t.search(r)!=-1)
	{
		result=g_result(t.match(r)[0].replace(r,'$1'));
		t=t.split(r);
		r=t.length-1;
		if (t[0]=='red'||t[0]=='black') t[0]=' '+t[0]+' ';
		if (t[r]=='red'||t[r]=='black') t[r]=' '+t[r]+' ';
		var BDW=CSS1?4:0;
		var red=g_rb(t[0]);
		var black=g_rb(t[r]); // ff\u4E4B\u6D41\u5C45\u7136\u8981\u628A\u6B63\u5219\u5339\u914D\u51FA\u6765\u7684\u53C2\u6570$1-$9\u8FD9\u4E9B\u4E5F\u653Esplit\u7ED3\u679C\u91CC\uFF0C\u771F\u662F\u6709\u75C5\uFF01
		t='<table><tr><td style="line-height:22px;"><span style="line-height:23px;">\u5DF2\u83B7\u5F97\u5982\u4E0B\u6570\u636E\uFF01\u70B9\u7EA2\u5B57\u66F4\u65B0\u5BF9\u5E94\u9879\u76EE\uFF01\u70B9\u786E\u5B9A\u66F4\u65B0\u5168\u90E8</span>';
		t+='<br>\u7EA2\u65B9<a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_redteam\',document.getElementById(\'r_team\').value)">\u56E2\u4F53</a>:<input id="r_team" type="text" style="width:'+(parseInt(100*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+=' <a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_redname\',document.getElementById(\'r_name\').value)">\u59D3\u540D</a>:<input id="r_name" type="text" style="width:'+(parseInt(110*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+='<br>\u9ED1\u65B9<a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_blackteam\',document.getElementById(\'b_team\').value)">\u56E2\u4F53</a>:<input id="b_team" type="text" style="width:'+(parseInt(100*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+=' <a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_blackname\',document.getElementById(\'b_name\').value)">\u59D3\u540D</a>:<input id="b_name" type="text" style="width:'+(parseInt(110*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+='</td><td>&nbsp;</td><td style="line-height:22px;">'
		t+='<a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_result\',document.getElementById(\'rbt_re\').value)">\u7ED3\u679C</a>:<input id="rbt_re" type="text" style="width:'+(parseInt(40*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+='<br><a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_redlevel\',document.getElementById(\'r_rank\').value)">\u7B49\u7EA7</a>:<input id="r_rank" type="text" style="width:'+(parseInt(40*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+='<br><a style="color:#f00" href="javascript:g_update(\'DhtmlXQ_blacklevel\',document.getElementById(\'b_rank\').value)">\u7B49\u7EA7</a>:<input id="b_rank" type="text" style="width:'+(parseInt(40*fdbs)-BDW)+'px;height:'+(parseInt(18*fdbs)-BDW)+'px;" value="">';
		t+='</td></tr></table>';
		showalert(t+'|g_rbt(1)');
		document.getElementById('rbt_re').value=result;
		document.getElementById('r_team').value=red[0];
		document.getElementById('r_name').value=red[1];
		document.getElementById('r_rank').value=red[2];
		document.getElementById('b_team').value=black[0];
		document.getElementById('b_name').value=black[1];
		document.getElementById('b_rank').value=black[2];
	}
	else
	{
		showalert('\u683C\u5F0F\uFF1A\u68CB\u961F \u7EA2\u65B9(\u7B49\u7EA7) \u7ED3\u679C \u68CB\u961F \u9ED1\u65B9(\u7B49\u7EA7) \u6216\u8005\uFF1A\u7EA2\u65B9 \u7ED3\u679C \u9ED1\u65B9<br>\u683C\u5F0F\uFF1A\u68CB\u961F \u7EA2\u65B9(\u7B49\u7EA7)-\u7ED3\u679C-\u68CB\u961F \u9ED1\u65B9(\u7B49\u7EA7) \u6216\u8005\uFF1A\u7EA2\u65B9-\u7ED3\u679C-\u9ED1\u65B9<br>\u683C\u5F0F\uFF1A\u68CB\u961F \u7EA2\u65B9 \u7ED3\u679C \u68CB\u961F \u9ED1\u65B9 \u3000\u6216\u8005\uFF1A\u68CB\u961F \u7EA2\u65B9-\u7ED3\u679C-\u68CB\u961F \u9ED1\u65B9<br>\u6B64\u68CB\u8C31\u7684\u6807\u9898\u4E0D\u662F\u6807\u51C6\u683C\u5F0F\uFF01 \u60A8\u53EF\u4EE5\u901A\u8FC7\u4EBA\u5DE5\u6DFB\u52A0\u7A7A\u683C\u6765\u533A\u5206\u5404\u9879\u6570\u636E');
	}
}
function g_update(obj,str)
{
	if (document.formSave!=null&&str!='')
		document.formSave.elements[obj].value=str;
}
function g_changerbt(rbt)
{
	var t=document.formSave.DhtmlXQ_title.value.replace(/(^\s*|\s*$)/gi,'').replace(/(\w) (\w)/gi,'$1&nbsp;$2');
	var s=t.replace(/^([^\r\n ]+) ([^\r\n ]+) ([^\r\n ]+) ([^\r\n ]+) ([^\r\n ]+)$/gi,'$4 $5 \{$3\} $1 $2').replace(/^([^\r\n ]+) ([^\r\n ]+) ([^\r\n ]+)$/gi,'$3 \{$2\} $1');
	var r=[];
	r[3]=s.replace(/^(.+) \{(.+)\} (.+)$/gi,'$1 $2 $3');
	r[2]=s.replace(/^(.+) \{.+\} (.+)$/gi,'$1 \u80DC $2');
	r[1]=s.replace(/^(.+) \{.+\} (.+)$/gi,'$1 \u548C $2');
	r[0]=s.replace(/^(.+) \{.+\} (.+)$/gi,'$1 \u8D1F $2');
	s=r[3];
	var m='\u6807\u51C6\u683C\u5F0F\uFF1A\u7EA2\u65B9\u68CB\u961F \u7EA2\u65B9 \u7ED3\u679C \u9ED1\u65B9\u68CB\u961F \u9ED1\u65B9';
	if (!isNaN(rbt))
	{
		document.formSave.DhtmlXQ_title.value=r[rbt].replace(/\&nbsp\;/gi,' ');
		clickNO();
	}
	else if (t!=s)
	{
		showalert('<div style="overflow:hidden;text-align:left;width:'+(wm*0.8-10)+'px;">'+m+'<br><a href="javascript:g_changerbt(3)"><nobr>\u70B9\u6B64\u5C06\u6807\u9898\u6539\u6210['+r[3]+']</nobr></a><br><a href="javascript:g_changerbt(2)"><nobr>\u70B9\u6B64\u5C06\u6807\u9898\u6539\u6210['+r[2]+']</nobr></a><br><a href="javascript:g_changerbt(1)"><nobr>\u70B9\u6B64\u5C06\u6807\u9898\u6539\u6210['+r[1]+']</nobr></a><br><a href="javascript:g_changerbt(0)"><nobr>\u70B9\u6B64\u5C06\u6807\u9898\u6539\u6210['+r[0]+']</nobr></a></div>');
	}
	else
	{
		showalert(m+'<br>\u60A8\u7684\u68CB\u8C31\u6807\u9898\u4E0D\u7B26\u5408\u6807\u51C6\u683C\u5F0F\uFF0C\u65E0\u6CD5\u4EA4\u6362\u7EA2\u9ED1\u65B9');
	}
}
function g_title(y)
{
	var red=CLS(CLS(document.formSave.DhtmlXQ_redteam.value)+' '+CLS(document.formSave.DhtmlXQ_redname.value)+'('+CLS(document.formSave.DhtmlXQ_redlevel.value)+')').replace(/\(\s*\)/gi,'');
	var black=CLS(CLS(document.formSave.DhtmlXQ_blackteam.value)+' '+CLS(document.formSave.DhtmlXQ_blackname.value)+'('+CLS(document.formSave.DhtmlXQ_blacklevel.value)+')').replace(/\(\s*\)/gi,'');
	var result=g_result(document.formSave.DhtmlXQ_result.value);
	var t=(red+' '+result+' '+black).replace(/\s+/gi,' ');
	if ((red=='')||(black==''))
		showalert('\u8BF7\u5C06\u7EA2\u65B9\u9ED1\u65B9\u68CB\u624B\u8D44\u6599\u586B\u5199\u5B8C\u6BD5\u540E\u518D\u70B9\u51FB');
	else if (y==1)
	{
		if (document.formSave.DhtmlXQ_other.value==''&&document.formSave.DhtmlXQ_title.value.indexOf(' VS ')==-1) document.formSave.DhtmlXQ_other.value=document.formSave.DhtmlXQ_title.value;
		document.formSave.DhtmlXQ_title.value=t;
	}
	else
	{
		showalert('\u6807\u51C6\u683C\u5F0F\uFF1A\u7EA2\u65B9\u68CB\u961F \u7EA2\u65B9(\u7B49\u7EA7) \u7ED3\u679C \u9ED1\u65B9\u68CB\u961F \u9ED1\u65B9(\u7B49\u7EA7)<br>\u60A8\u662F\u5426\u5C06\u68CB\u8C31\u6807\u9898\u6539\u6210 ['+t+']|g_title(1)');
	}
}
function CLS(s)
{
	return s.replace(/(^\s*|\s*$)/gi,'');
}
function g_rb(rbt)
{
	var rbteam='';
	var rbname='';
	var rblevel='';
	if (rbt=='red')
	{
		rbteam=CLS(getvar('redteam'));
		rbname=CLS(getvar('redname'));
		rblevel=CLS(getvar('redlevel'));
		if (rbteam==''&&rbname==''&&rblevel=='') rbt=CLS(getvar('red'));
		else rbt='';
	}
	else if (rbt=='black')
	{
		rbteam=CLS(getvar('blackteam'));
		rbname=CLS(getvar('blackname'));
		rblevel=CLS(getvar('blacklevel'));
		if (rbteam==''&&rbname==''&&rblevel=='') rbt=CLS(getvar('black'));
		else rbt='';
	}
	var rbstr=rbt==''?'':rbt.replace(/(\w) (\w)/gi,'$1_hldcg_$2').split(/ +/gi);
	if (rbstr.length==3)
	{
		rbteam=rbstr[0];
		rbname=rbstr[1];
		rblevel=rbstr[2].match(/\(.+\)/gi);
		if (rblevel==null) rblevel=rbstr[2];
		else rblevel=rblevel[0].replace(/\((.*)\)/gi,'$1');
	}
	if (rbstr.length==2)
	{
		if (rbstr[1].search(/.+\((.*)\)/gi)!=-1)
		{
			rbstr[1]=rbstr[1].match(/.+\((.*)\)/gi)[0];
			rbteam=rbstr[0];
			rbname=rbstr[1].replace(/\((.*)\)$/gi,'');
			rblevel=rbstr[1].replace(/.+\((.*)\)/gi,'$1');
		}
		else if (rbstr[1].search(/\((.*)\)/gi)!=-1)
		{
			rbstr[1]=rbstr[1].match(/\((.*)\)/gi)[0];
			rbteam='';
			rbname=rbstr[0];
			rblevel=rbstr[1].replace(/\((.*)\)/gi,'$1');
		}
		else
		{
			rbteam=rbstr[0];
			rbname=rbstr[1];
			rblevel='';
		}
	}
	if (rbstr.length==1)
	{
		if (rbstr[0].search(/.+\((.*)\)/gi)!=-1)
		{
			rbstr[0]=rbstr[0].match(/.+\((.*)\)/gi)[0];
			rbteam='';
			rbname=rbstr[0].replace(/\((.*)\)$/gi,'');
			rblevel=rbstr[0].replace(/.+\((.*)\)/gi,'$1');
		}
		else
		{
			rbteam='';
			rbname=rbstr[0];
			rblevel='';
		}
	}
	rbname=CLS(rbname.replace(/_hldcg_/gi,' ')).replace(/\+/gi,' ');
	rbteam=CLS(rbteam.replace(/_hldcg_/gi,' ')).replace(/\+/gi,' ');
	rblevel=CLS(rblevel.replace(/_hldcg_/gi,' ')).replace(/\+/gi,' ');
	return [rbteam,rbname,rblevel];
}
function g_result(r)
{
	if (r.search(/^((\d*\.)?\d+) ?[\+\-\=\:] ?((\d*\.)?\d+)$/gi)!=-1)
	{
		r=r.replace(/([\+\-\=\:])/gi,' $1 ').split(/ +/gi);
		if (r[1]=='+') r='2';
		else if (r[1]=='=') r='1';
		else if (r[1]=='-') r='0';
	}
	var result='VS';
	switch(r)
	{
	case '\u7EA2\u80DC':
	case '\u9ED1\u8D1F':
	case '\u5148\u80DC':
	case '\u540E\u8D1F':
	case '\u7EA2\u5148\u80DC':
	case '\u7EA2\u65B9\u80DC':
	case '\u9ED1\u65B9\u8D1F':
	case '\u9ED1\u540E\u8D1F':
	case '\u9ED1\u65B9\u8BA4\u8D1F':
	case '\u9ED1\u65B9\u6295\u5B50\u8BA4\u8D1F':
	case '\u80DC 2':
	case '\u80DC':
	case 'Red_win':
	case '2':
		result='\u80DC';
		break;
	case '\u7D05\u52DD':
	case '\u9ED1\u8CA0':
	case '\u5148\u52DD':
	case '\u5F8C\u8CA0':
	case '\u7D05\u5148\u52DD':
	case '\u7D05\u65B9\u52DD':
	case '\u9ED1\u65B9\u8CA0':
	case '\u9ED1\u5F8C\u8CA0':
	case '\u9ED1\u65B9\u8A8D\u8CA0':
	case '\u9ED1\u65B9\u6295\u5B50\u8A8D\u8CA0':
	case '\u52DD 2':
	case '\u52DD':
		result='\u52DD';
		break;
	case '\u9ED1\u80DC':
	case '\u7EA2\u8D1F':
	case '\u5148\u8D1F':
	case '\u540E\u80DC':
	case '\u7EA2\u5148\u8D1F':
	case '\u7EA2\u65B9\u8D1F':
	case '\u9ED1\u65B9\u80DC':
	case '\u9ED1\u540E\u80DC':
	case '\u7EA2\u65B9\u8BA4\u8D1F':
	case '\u7EA2\u65B9\u6295\u5B50\u8BA4\u8D1F':
	case '\u8D1F 0':
	case '\u8D1F':
	case 'Black_win':
	case '0':
		result='\u8D1F';
		break;
	case '\u9ED1\u52DD':
	case '\u7D05\u8CA0':
	case '\u5148\u8CA0':
	case '\u5F8C\u52DD':
	case '\u7D05\u5148\u8CA0':
	case '\u7D05\u65B9\u8CA0':
	case '\u9ED1\u65B9\u52DD':
	case '\u9ED1\u5F8C\u52DD':
	case '\u7D05\u65B9\u8A8D\u8CA0':
	case '\u7D05\u65B9\u6295\u5B50\u8A8D\u8CA0':
	case '\u8CA0 0':
	case '\u8CA0':
		result='\u8CA0';
		break;
	case '\u548C\u68CB':
	case '\u548C\u5C40':
	case '\u5224\u548C':
	case '\u8BAE\u548C':
	case '\u8B70\u548C':
	case '\u5148\u548C':
	case '\u540E\u548C':
	case '\u5F8C\u548C':
	case '\u7EA2\u548C':
	case '\u7D05\u548C':
	case '\u9ED1\u548C':
	case '\u7EA2\u5148\u548C':
	case '\u7D05\u5148\u548C':
	case '\u9ED1\u5148\u548C':
	case '\u7EA2\u540E\u548C':
	case '\u7D05\u5F8C\u548C':
	case '\u9ED1\u540E\u548C':
	case '\u9ED1\u5F8C\u548C':
	case '\u7EA2\u65B9\u548C':
	case '\u7D05\u65B9\u548C':
	case '\u9ED1\u65B9\u548C':
	case '\u53CC\u65B9\u8BAE\u548C':
	case '\u96D9\u65B9\u8B70\u548C':
	case '\u4E0D\u53D8\u505A\u548C':
	case '\u4E0D\u8B8A\u505A\u548C':
	case '\u53CC\u65B9\u4E0D\u53D8\u505A\u548C':
	case '\u96D9\u65B9\u4E0D\u8B8A\u505A\u548C':
	case '\u548C 1':
	case '\u548C':
	case 'Draw':
	case '1':
		result='\u548C';
		break;
	}
	return result;
}
function g_hide(u,t)
{
	if (!isSP) {showalert('\u975E\u4E2D\u56FD\u8C61\u68CB\u68CB\u8C31\u4ED3\u5E93[<a href="http://www.dpxq.com/" target="_blank" style="color:#f00">www.dpxq.com</a>]\u7F51\u7AD9\uFF0C\u6682\u65F6\u65E0\u6CD5\u4F7F\u7528\u6B64\u529F\u80FD');return;}
	if (parent.search_fast.location.pathname!='/hldcg/search/fastlink.htm')
	{
		parent.search_fast.location.href='fastlink.htm';
	}
	if (parent.search_fast.fasthash==u)
	{
		if (t==1) parent.document.getElementById('search_fast').style.top='0px';
		else
		{
			parent.document.getElementById('search_fast').style.top='2000px';
			parent.search_fast.fasthash='';
		}
	}
	else
	{
		parent.document.getElementById('search_fast').style.top='0px';
		parent.search_fast.fasthash=u;
		g_top();
	}
}
function g_top()
{
	if (parent.search_fast.location.pathname.search(/fastlink\.htm$/gi)==-1)
	{
		setTimeout("g_top()",1000);
		return;
	}
	var u=parent.search_fast.fasthash.split('#')[1];
	if (parent.search_fast.document.getElementById(u))
	{
		// \u602A\u5F02\u6A21\u5F0F\u4E0B\u6240\u6709\u6D4F\u89C8\u5668\u90FD\u7528 body.scrollTop \u5475\u5475 parent.search_fast.document.documentElement.scrollTop
		parent.search_fast.document.body.scrollTop=parent.search_fast.document.getElementById(u).offsetTop;
	}
}
function g_class()
{
	g_hide('fastlink.htm#g_class');
}
function g_tour()
{
	g_hide('fastlink.htm#g_event',1);
	if (parent.search_fast.document.getElementById('s_tour0'))
	{
		var s=document.formSave.DhtmlXQ_event.value;
		if (s==''||parent.search_fast.document.getElementById('s_tour0').value!=s)
		{
			parent.search_fast.document.getElementById('s_tour0').value=s;
			parent.search_view.location.href='search_tour.asp?event='+myURLEscape(s)+'&group='+document.formSave.DhtmlXQ_group.value+'&round='+document.formSave.DhtmlXQ_round.value.replace(/\D/gi,'')+'&rnd='+Math.random();
		}
		parent.search_fast.searchRound();
	}
	else
	{
		setTimeout('g_tour()',1000);
	}
}
function g_event()
{
	g_hide('fastlink.htm#g_event');
}
function g_open()
{
	g_hide('fastlink.htm#g_open');
}
function g_refer()
{
	g_hide('fastlink.htm#g_refer');
}
function g_other()
{
	g_hide('fastlink.htm#g_other');
}
function g_judge()
{
	g_hide('fastlink.htm#g_judge');
}
function g_record()
{
	g_hide('fastlink.htm#g_record');
}
function g_remark()
{
	g_hide('fastlink.htm#g_remark');
}
function g_author()
{
	g_hide('fastlink.htm#g_author');
}
function g_redteam()
{
	g_hide('fastlink.htm#g_redteam');
}
function g_blackteam()
{
	g_hide('fastlink.htm#g_blackteam');
}
function g_redname()
{
	g_hide('fastlink.htm#g_redname');
}
function g_blackname()
{
	g_hide('fastlink.htm#g_blackname');
}
function g_redlevel()
{
	g_hide('fastlink.htm#g_redlevel');
}
function g_blacklevel()
{
	g_hide('fastlink.htm#g_blacklevel');
}
function g_redeng()
{
	g_hide('fastlink.htm#g_redeng');
}
function g_blackeng()
{
	g_hide('fastlink.htm#g_blackeng');
}
function g_redrating()
{
	g_hide('fastlink.htm#g_redrating');
}
function g_blackrating()
{
	g_hide('fastlink.htm#g_blackrating');
}
function g_redtime()
{
	g_hide('fastlink.htm#g_redtime');
}
function g_blacktime()
{
	g_hide('fastlink.htm#g_blacktime');
}
function g_date()
{
	g_hide('fastlink.htm#g_date');
}
function g_place()
{
	g_hide('fastlink.htm#g_place');
}
function g_round()
{
	g_hide('fastlink.htm#g_round');
}
function g_timerule()
{
	g_hide('fastlink.htm#g_timerule');
}
function g_group()
{
	g_hide('fastlink.htm#g_group');
}
function g_table()
{
	g_hide('fastlink.htm#g_table');
}
function Delete(str)
{
	if (document.formSave.DhtmlXQ_owner.value==''||document.formSave.DhtmlXQ_ownerpass.value=='') {showalert('\u7528\u6237\u540D\u6216\u5BC6\u7801\u4E3A\u7A7A\u65F6\u662F\u4E0D\u80FD'+(str==250?'\u5220\u9664':'\u4E22\u5F03')+'\u68CB\u8C31\u7684\uFF0C\u91CD\u65B0\u767B\u9646\u540E\u4E00\u822C\u4F1A\u81EA\u52A8\u586B\u597D\u8FD9\u4E24\u9879\uFF0C\u5982\u679C\u767B\u9646\u540E\u8FD8\u4E0D\u80FD\u81EA\u52A8\u586B\u597D\uFF0C\u4E5F\u53EF\u81EA\u5DF1\u624B\u5DE5\u586B\u5199\u6B63\u786E\u7684\u7528\u6237\u540D\u548C\u5BC6\u7801');return;}
	if (!(document.formSave.DhtmlXQ_id.value-0>0)) {showalert('\u68CB\u8C31\u5E8F\u53F7\u4E0D\u662F\u5927\u4E8E0\u7684\u6B63\u6574\u6570\u65F6\u662F\u4E0D\u80FD'+(str==250?'\u5220\u9664':'\u4E22\u5F03')+'\u68CB\u8C31\u7684\uFF0C\u8BF7\u91CD\u65B0\u70B9\u68CB\u8C31\u6807\u9898\u67E5\u770B\u68CB\u8C31\uFF0C\u83B7\u5F97\u6B63\u786E\u7684\u68CB\u8C31\u5E8F\u53F7\u540E\u518D\u8FDB\u884C\u64CD\u4F5C');return;}
	document.formSave.DhtmlXQ_hidden.value=str;
	save(document.formSave.tn.value);
}
function SetCookie(name,value)
{
	var expdate=new Date();
	var argv=SetCookie.arguments;
	var argc=SetCookie.arguments.length;
	var expires=(argc>2)?argv[2]:null;
	var path=(argc>3)?argv[3]:null;
	var domain=(argc>4)?argv[4]:null;
	var secure=(argc>5)?argv[5]:false;
	expires=604800;
	if (expires!=null) expdate.setTime(expdate.getTime()+(expires*1000));
	document.cookie=name+'='+escape(value)+((expires==null)?'':(' ;expires='+expdate.toGMTString()))+((path==null)?'':(' ;path='+path))+((domain==null)?'':(' ;domain='+domain))+((secure==true)?'; secure':'');
}
function DelCookie(name)
{
	var exp=new Date();
	exp.setTime(exp.getTime()-1);
	var cval=GetCookie(name);
	document.cookie=name+'='+cval+';expires='+exp.toGMTString();
}
function GetCookie(name)
{
	var arg=eval('/'+name+'=[\\w\\%]*;/gi');
	arg=document.cookie.match(arg);
	return (arg==null)?'':unescape(arg[0].replace(/.+=(.*);/gi,'$1'));
}
function gEvent()
{
	var tn=typeof(parent.search_end_pos.s_owner);
	if (tn=='string')
	{
		tn=parent.search_end_pos.s_owner;
		if (tn=='u'||tn=='\u68CB\u53CB\u4E0A\u4F20')
		{
			var u=getvar('oldowner');
			if(u!='') tn=u;
		}
	}
	else tn='m';
	var DhtmlXQ_class=getvar('class').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var DhtmlXQ_event=getvar('event').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	parent.search_end_pos.location.href="event.asp?owner="+tn+"&class="+DhtmlXQ_class+"&event="+DhtmlXQ_event;
}
function diggmess(mess)
{
	if (window!=parent) showalert(mess);
	else name_dhtmlxq_view.showalert(mess);
}
function diggvar(mess)
{
	if (window!=parent) return getvar(mess);
	else return unconv(getvar(mess));
}
function myURLEscape(s)
{
	s=s.replace(/[^\- \(\)\[\]\.\,\!\w\u0100-\uFFFD\:\;\*\<\>\xB7]/gi,'');
	s=escape(s).replace(/\%B7/gi,'%u00B7');
	return s;
}
function unconv(s)
{
	return unescape(escape(s).replace(/(_|%5C|%5F|%25)u([0-9A-F]{4})/gi,'%u$2'));
}
function digg(price)
{
	var ViewUrl=diggvar('viewurl');
	var DhtmlXQ_id=ViewUrl.match(/id=\d{1,9}/gi);
	DhtmlXQ_id=(DhtmlXQ_id==null)?0:DhtmlXQ_id[0].substr(3)-0;
	var DhtmlXQ_owner=GetCookie('dpxqvipuser');
	var tn=ViewUrl.match(/owner=[^&]+/gi);
	if (DhtmlXQ_id==0||tn==null) {diggmess('\u53EA\u6709\u68CB\u8C31\u4ED3\u5E93\u4E2D\u4FDD\u5B58\u7684\u68CB\u8C31\u624D\u53EF\u63A8\u8350');return;}
	tn=tn[0].substr(6);
	if (tn=='b'||tn=='%B5%CD%D3%DA24%B2%BD') tn='b';
	else if (tn=='m'||tn=='%B4%F3%CA%A6%B6%D4%BE%D6') tn='m';
	else if (tn=='n'||tn=='%CD%F8%C2%E7%C8%FC%CA%C2') tn='n';
	else if (tn=='t'||tn=='%B6%A5%BC%E2%B6%D4%BE%D6') tn='t';
	else if (tn=='o'||tn=='%C6%E4%CB%FB%B6%D4%BE%D6') tn='o';
	else if (tn=='k'||tn=='%B6%A5%BC%E2%BF%EC%C6%E5') tn='k';
	else tn='u';
	var DhtmlXQ_class=diggvar('class').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	if (price==0)
	{
		var oldowner=diggvar('oldowner');
		if (oldowner=='')
		{
			diggmess('\u6B64\u68CB\u8C31\u5C5E\u4E8E[\u65E0\u4E3B\u68CB\u8C31]\uFF0C\u65E0\u4EBA\u7BA1\u7406\uFF0C\u56E0\u6B64\u65E0\u6CD5\u62A5\u9519');
			return;
		}
		else if (oldowner=='\u8C61\u68CB\u8C31\u5927\u5168'||oldowner.search(/^\w$/gi)!=-1) oldowner='\u4E1C\u840D\u516C\u53F8';
		else if ((tn!='u'||DhtmlXQ_class.substr(0,5)=='\u8C61\u68CB\u8C31\u5927\u5168')&&oldowner!='\u4E1C\u840D\u516C\u53F8') oldowner+=',\u4E1C\u840D\u516C\u53F8';
		if (location.pathname.substr(0,18)=='/hldcg/search/view') //\u68CB\u8C31\u6D4F\u89C8\u9875
		{
			ShowMess(3,myURLEscape(oldowner)+'|'+myURLEscape('\u68CB\u8C31\u62A5\u9519\uFF1A'+tn+'_'+DhtmlXQ_id));
			if (tn=='u') diggmess('<div>\u6B64\u68CB\u8C31\u4E3A\u68CB\u53CB\u4E0A\u4F20\u5BF9\u5C40\uFF0C\u68CB\u8C31\u4E3B\u4EBA\u662F['+oldowner+']<br>\u8BF7\u60A8\u5230\u9875\u9762\u5DE6\u4FA7\u7ED9['+oldowner+']\u53D1\u77ED\u6D88\u606F\u8BF4\u660E\u9519\u8BEF\u8BE6\u60C5<br>\u672C\u7AD9\u7BA1\u7406\u5458\u4E0D\u5904\u7406\u68CB\u53CB\u4E0A\u4F20\u68CB\u8C31\u7684\u9519\u8BEF</div>');
			else diggmess('\u8BF7\u60A8\u5230\u9875\u9762\u5DE6\u4FA7\u7ED9\u672C\u7AD9\u68CB\u8C31\u7BA1\u7406\u5458\u53D1\u77ED\u6D88\u606F\u8BF4\u660E\u9519\u8BEF\u8BE6\u60C5<br>\u53D1\u6D88\u606F\u540E\u60A8\u8FD8\u53EF\u8054\u7CFB\u7BA1\u7406\u5458QQ88081492\u5FEB\u901F\u53CD\u6620\u9519\u8BEF\u8BE6\u60C5<br><a href="javascript:window.open(\'tencent://message/?uin=88081492&Site=qipuerror&Menu=yes\');void(0)">\u70B9\u6B64\u8054\u7CFB\u7AD9\u957FQQ\u53CD\u6620\u9519\u8BEF\u60C5\u51B5</a>');
		}
		else if (typeof(isSP)!='undefined')
		{
			if (isSP)
			{
				parent.search_end_pos.ShowMess(3,myURLEscape(oldowner)+'|'+myURLEscape('\u68CB\u8C31\u62A5\u9519\uFF1A'+tn+'_'+DhtmlXQ_id));
				if (tn=='u') diggmess('<div>\u6B64\u68CB\u8C31\u4E3A\u68CB\u53CB\u4E0A\u4F20\u5BF9\u5C40\uFF0C\u68CB\u8C31\u4E3B\u4EBA\u662F['+oldowner+']<br>\u8BF7\u60A8\u5230\u9875\u9762\u5DE6\u4FA7\u7ED9['+oldowner+']\u53D1\u77ED\u6D88\u606F\u8BF4\u660E\u9519\u8BEF\u8BE6\u60C5<br>\u672C\u7AD9\u7BA1\u7406\u5458\u4E0D\u5904\u7406\u68CB\u53CB\u4E0A\u4F20\u68CB\u8C31\u7684\u9519\u8BEF</div>');
				else diggmess('\u8BF7\u60A8\u5230\u9875\u9762\u5DE6\u4FA7\u7ED9\u672C\u7AD9\u68CB\u8C31\u7BA1\u7406\u5458\u53D1\u77ED\u6D88\u606F\u8BF4\u660E\u9519\u8BEF\u8BE6\u60C5<br>\u53D1\u6D88\u606F\u540E\u60A8\u8FD8\u53EF\u8054\u7CFB\u7BA1\u7406\u5458QQ88081492\u5FEB\u901F\u53CD\u6620\u9519\u8BEF\u8BE6\u60C5<br><a href="javascript:window.open(\'tencent://message/?uin=88081492&Site=qipuerror&Menu=yes\');void(0)">\u70B9\u6B64\u8054\u7CFB\u7AD9\u957FQQ\u53CD\u6620\u9519\u8BEF\u60C5\u51B5</a>');
			}
			else diggmess('\u65E0\u6CD5\u63A8\u8350');
		}
		else diggmess('\u65E0\u6CD5\u63A8\u8350');
		return;
	}
	var DhtmlXQ_type=diggvar('type').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var DhtmlXQ_event=diggvar('event').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var DhtmlXQ_round=' '+diggvar('round').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var DhtmlXQ_date=' '+diggvar('date').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var DhtmlXQ_other=' '+diggvar('other').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var DhtmlXQ_open=' '+diggvar('open').replace(/(^\s*|\s*$)/gi,'').replace(/(^\w{3} )/gi,'').replace(/\s+/gi,' ');
	var lclass=DhtmlXQ_class.replace(/[^\x00-\xff]/gi,'xx').length;
	var levent=DhtmlXQ_event.replace(/[^\x00-\xff]/gi,'xx').length;
	var lround=DhtmlXQ_round.replace(/[^\x00-\xff]/gi,'xx').length;
	var ldate=DhtmlXQ_date.replace(/[^\x00-\xff]/gi,'xx').length;
	var lother=DhtmlXQ_other.replace(/[^\x00-\xff]/gi,'xx').length;
	var lopen=DhtmlXQ_open.replace(/[^\x00-\xff]/gi,'xx').length;
	var D_class='';
	if (DhtmlXQ_class=='\u5168\u56FD\u8C61\u68CB\u7532\u7EA7\u8054\u8D5B') D_class='\u8C61\u7532\u8054\u8D5B';
	else if (DhtmlXQ_class=='\u5168\u56FD\u8C61\u68CB\u4E2A\u4EBA\u8D5B') D_class='\u4E2A\u4EBA\u8D5B';
	else if (DhtmlXQ_class=='\u5168\u56FD\u8C61\u68CB\u56E2\u4F53\u8D5B') D_class='\u56E2\u4F53\u8D5B';
	else if (DhtmlXQ_class=='\u5168\u56FD\u8C61\u68CB\u5927\u5E08\u51A0\u519B\u8D5B') D_class='\u5927\u5E08\u8D5B';
	else if (DhtmlXQ_class=='\u4E94\u7F8A\u676F\u5168\u56FD\u8C61\u68CB\u51A0\u519B\u9080\u8BF7\u8D5B') D_class='\u4E94\u7F8A\u676F';
	else if (DhtmlXQ_class=='\u5176\u4ED6\u5927\u5E08\u6216\u4EE5\u4E0A\u7EA7\u522B\u5927\u8D5B') D_class='\u5927\u5E08\u7EA7\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u6768\u5B98\u7498\u676F\u8C61\u68CB\u8D5B') D_class='\u6768\u5B98\u7498\u676F';
	else if (DhtmlXQ_class=='\u6765\u7FA4\u676F\u8C61\u68CB\u540D\u4EBA\u6218') D_class='\u6765\u7FA4\u676F';
	else if (DhtmlXQ_class=='\u94F6\u8354\u676F\u8C61\u68CB\u4E89\u9738\u8D5B') D_class='\u94F6\u8354\u676F';
	else if (DhtmlXQ_class=='\u5609\u5468\u676F\u8C61\u68CB\u7279\u7EA7\u5927\u5E08\u51A0\u519B\u8D5B') D_class='\u5609\u5468\u676F';
	else if (DhtmlXQ_class=='\u8C61\u68CB\u7535\u89C6\u5FEB\u68CB\u8D5B') D_class='\u7535\u89C6\u5FEB\u68CB\u8D5B';
	else if (DhtmlXQ_class=='\u5168\u56FD\u8D5B\u4E8B') D_class='\u5168\u56FD\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u667A\u8FD0\u4F1A') D_class='\u667A\u8FD0\u4F1A';
	else if (DhtmlXQ_class=='\u7535\u8111\u8C61\u68CB\u8F6F\u4EF6\u5927\u8D5B') D_class='\u68CB\u8F6F\u5927\u8D5B';
	else if (DhtmlXQ_class=='\u9752\u5E74\u8D5B\u4E8B') D_class='\u9752\u5E74\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u5C11\u5E74\u8D5B\u4E8B') D_class='\u5C11\u5E74\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u7F51\u7EDC\u8D5B\u4E8B') D_class='\u7F51\u7EDC\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u76F2\u68CB\u8F66\u8F6E\u64C2\u53F0\u8868\u6F14\u53CB\u8C0A\u8D5B') D_class='\u8868\u6F14\u8D5B';
	else if (DhtmlXQ_class=='\u4E8C\u5341\u4E16\u7EAA\u8D5B\u4E8B') D_class='\u4E8C\u5341\u4E16\u7EAA\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u5176\u4ED6\u8D5B\u4E8B') D_class='\u5176\u4ED6\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u4E16\u754C\u8C61\u68CB\u5927\u5E08\u8D5B') D_class='\u4E16\u754C\u5927\u5E08\u8D5B';
	else if (DhtmlXQ_class=='\u4E16\u754C\u8C61\u68CB\u9526\u6807\u8D5B') D_class='\u4E16\u9526\u8D5B';
	else if (DhtmlXQ_class=='\u4E9A\u6D32\u8C61\u68CB\u9526\u6807\u8D5B') D_class='\u4E9A\u9526\u8D5B';
	else if (DhtmlXQ_class=='\u56FD\u9645\u8D5B\u4E8B') D_class='\u56FD\u9645\u8D5B\u4E8B';
	else if (DhtmlXQ_class=='\u8C61\u68CB\u8C31\u5927\u5168-\u53E4\u8C31\u6B8B\u5C40'||DhtmlXQ_class=='\u8C61\u68CB\u68CB\u8C31\u5927\u5168-\u53E4\u8C31\u6B8B\u5C40') D_class='\u53E4\u8C31\u6B8B\u5C40';
	else if (DhtmlXQ_class=='\u8C61\u68CB\u8C31\u5927\u5168-\u53E4\u8C31\u5168\u5C40'||DhtmlXQ_class=='\u8C61\u68CB\u68CB\u8C31\u5927\u5168-\u53E4\u8C31\u5168\u5C40') D_class='\u53E4\u8C31\u5168\u5C40';
	else if ((DhtmlXQ_class=='\u8C61\u68CB\u8C31\u5927\u5168-\u8FD1\u73B0\u4EE3\u6B8B\u6392\u5C40'||DhtmlXQ_class=='\u8C61\u68CB\u68CB\u8C31\u5927\u5168-\u8FD1\u73B0\u4EE3\u6B8B\u6392\u5C40')&&DhtmlXQ_event=='\u8C61\u68CB\u6740\u7740\u5927\u5168') D_class='\u8C61\u68CB\u6740\u7740\u5927\u5168';
	else if ((DhtmlXQ_class=='\u8C61\u68CB\u8C31\u5927\u5168-\u8FD1\u73B0\u4EE3\u6B8B\u6392\u5C40'||DhtmlXQ_class=='\u8C61\u68CB\u68CB\u8C31\u5927\u5168-\u8FD1\u73B0\u4EE3\u6B8B\u6392\u5C40')) D_class='\u6B8B\u5C40\u6392\u5C40\u68CB\u8C31';
	else if ((DhtmlXQ_class=='\u8C61\u68CB\u8C31\u5927\u5168-\u73B0\u4EE3\u68CB\u4E66\u4E13\u96C6'||DhtmlXQ_class=='\u8C61\u68CB\u68CB\u8C31\u5927\u5168-\u73B0\u4EE3\u68CB\u4E66\u4E13\u96C6')&&(DhtmlXQ_event=='\u4E2D\u56FD\u8C61\u68CB\u4E2D\u5C40\u5999\u624B300\u5C40'||DhtmlXQ_event=='\u4E2D\u5C40\u5927\u5168'||DhtmlXQ_event=='\u8C61\u68CB\u4E94\u51A0\u519B\u4E2D\u5C40\u96C6'||DhtmlXQ_event=='\u8C61\u68CB\u5F03\u5B50\u653B\u6740\u6CD5'||DhtmlXQ_event=='\u8C61\u68CB\u602A\u62DB\u901F\u80DC\u6CD5')) D_class='\u4E2D\u5C40\u68CB\u8C31';
	else if ((DhtmlXQ_class=='\u8C61\u68CB\u8C31\u5927\u5168-\u73B0\u4EE3\u68CB\u4E66\u4E13\u96C6'||DhtmlXQ_class=='\u8C61\u68CB\u68CB\u8C31\u5927\u5168-\u73B0\u4EE3\u68CB\u4E66\u4E13\u96C6')) D_class='\u5F00\u5C40\u5168\u5C40\u68CB\u8C31';
	else if (DhtmlXQ_type=='\u5E03\u5C40') D_class='\u5F00\u5C40\u5168\u5C40\u68CB\u8C31';
	else if (DhtmlXQ_type=='\u4E2D\u6B8B\u5C40') D_class='\u4E2D\u5C40\u68CB\u8C31';
	else if (DhtmlXQ_type=='\u6392\u5C40'||DhtmlXQ_type=='\u6C5F\u6E56\u6B8B\u5C40'||DhtmlXQ_type=='\u5B9E\u7528\u6B8B\u5C40'||DhtmlXQ_type=='\u5B9E\u6218\u6B8B\u5C40') D_class='\u6B8B\u5C40\u6392\u5C40\u68CB\u8C31';
	DhtmlXQ_class=' '+DhtmlXQ_class;
	DhtmlXQ_type=' '+DhtmlXQ_type;
	DhtmlXQ_event=' '+DhtmlXQ_event;
	var DhtmlXQ_title=diggvar('title').replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	var title=DhtmlXQ_title;
	var ltitle=DhtmlXQ_title.replace(/[^\x00-\xff]/gi,'xx').length;
	var maxlen=(D_class=='\u53E4\u8C31\u6B8B\u5C40'||D_class=='\u53E4\u8C31\u5168\u5C40'||D_class=='\u8C61\u68CB\u6740\u7740\u5927\u5168'||D_class=='\u6B8B\u5C40\u6392\u5C40\u68CB\u8C31'||D_class=='\u4E2D\u5C40\u68CB\u8C31'||D_class=='\u5F00\u5C40\u5168\u5C40\u68CB\u8C31')?100:38;
	if (ltitle>maxlen)
	{
		var red=g_rb('red');
		var redteam=(window!=parent?red[0]:unconv(red[0])).replace(/\s+/gi,' ');
		var redlevel=(window!=parent?red[2]:unconv(red[2]));
		var redname=(window!=parent?red[1]:unconv(red[1])).replace(/\s+/gi,' ');
		var black=g_rb('black');
		var blackteam=(window!=parent?black[0]:unconv(black[0])).replace(/\s+/gi,' ');
		var blacklevel=(window!=parent?black[2]:unconv(black[2]));
		var blackname=(window!=parent?black[1]:unconv(black[1])).replace(/\s+/gi,' ');
		var result=g_result(CLS(diggvar('result').replace(/\s+/gi,' ')));
		if (redname!=''&&blackname!='')
		{
			if (D_class=='\u8C61\u7532\u8054\u8D5B') {redteam=convliansai(redteam);blackteam=convliansai(blackteam);}
			title=CLS(redteam+' '+redname+' '+result+' '+blackteam+' '+blackname).replace(/\s+/gi,' ');
			if (title.replace(/[^\x00-\xff]/gi,'xx').length>maxlen)
			{
				title=CLS(redname+' '+result+' '+blackname).replace(/\s+/gi,' ');
				if (title.replace(/[^\x00-\xff]/gi,'xx').length>maxlen) title=DhtmlXQ_title;
			}
		}
	}
	var tlong=ltitle;
	var minlen=78;
	maxlen=82;
	if (tlong<minlen)
	{
		tlong+=levent;
		if (tlong<minlen)
		{
			tlong+=lround;
			if (tlong<minlen)
			{
				tlong+=ldate;
				if (tlong<minlen)
				{
					tlong+=lother;
					if (tlong<minlen)
					{
						tlong+=lopen;
						if (tlong<minlen)
						{
							tlong+=lclass;
							if (tlong>maxlen)
								tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date+DhtmlXQ_other+DhtmlXQ_open;
							else
								tlong=DhtmlXQ_title+DhtmlXQ_class+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date+DhtmlXQ_other+DhtmlXQ_open;
						}
						else if (tlong>maxlen)
							tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date+DhtmlXQ_other;
						else
							tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date+DhtmlXQ_other+DhtmlXQ_open;
					}
					else if (tlong>maxlen)
						tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date;
					else
						tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date+DhtmlXQ_other;
				}
				else if (tlong>maxlen)
					tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round;
				else
					tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round+DhtmlXQ_date;
			}
			else if (tlong>maxlen)
				tlong=DhtmlXQ_title+DhtmlXQ_event;
			else
				tlong=DhtmlXQ_title+DhtmlXQ_event+DhtmlXQ_round;
		}
		else if (tlong>maxlen)
			tlong=DhtmlXQ_title;
		else
			tlong=DhtmlXQ_title+DhtmlXQ_event;
	}
	else
		tlong=DhtmlXQ_title;
	tlong=tlong.replace(/(^\s*|\s*$)/gi,'').replace(/\s+/gi,' ');
	//alert(tn+'\n'+DhtmlXQ_owner+'\n'+DhtmlXQ_id+'\n'+price+'\n'+title+'\n'+tlong);
	var postdata='tn='+tn+'&owner='+myURLEscape(DhtmlXQ_owner)+'&id='+DhtmlXQ_id+'&price='+price+'&class='+myURLEscape(D_class)+'&title='+myURLEscape(title)+'&tlong='+myURLEscape(tlong);
	var xmlhttp=false;
	try {xmlhttp=new ActiveXObject('Msxml2.XMLHTTP');}
	catch (e0) {try {xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');}
	catch (e1) {try {xmlhttp=new XMLHttpRequest();}
	catch (e2) {diggmess('\u5BF9\u4E0D\u8D77\uFF0C\u60A8\u7684\u6D4F\u89C8\u5668\u4E0D\u652F\u6301xmlhttp\u7EC4\u4EF6\uFF0C\u8BF7\u66F4\u6362\u4E3A\u6700\u65B0\u7248\u672C\uFF01');return;}}}
	xmlhttp.open('POST','/hldcg/search/digg.asp',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send(postdata);
	var mess='\u8C22\u8C22\u60A8\u7684\u8BC4\u4EF7\uFF0C\u83B7\u5F97\u597D\u8BC4\u7684\u68CB\u8C31\u5C06\u63A8\u8350\u5230\u7F51\u7AD9\u9996\u9875\uFF0C\u8BF7\u5230\u9996\u9875\u67E5\u770B\u6548\u679C\uFF01<br>\u83B7\u5F97\u5DEE\u8BC4\u8FC7\u591A\uFF0C\u5BFC\u81F4\u68CB\u8C31\u4EF7\u503C\u4E3A\u8D1F\u503C\u7684\uFF0C\u6211\u4EEC\u5C06\u5C3D\u5FEB\u5728\u641C\u7D22\u7ED3\u679C\u4E2D\u5254\u9664\u3002<br>\u68CB\u53CB(\u5305\u62EC\u60A8\u7684\u597D\u53CB)\u53EF\u5BF9\u81EA\u5DF1\u7684\u7CBE\u5F69\u5BF9\u5C40\u505A\u597D\u8BC4\uFF0C\u8BA9\u5927\u5BB6\u5171\u540C\u5206\u4EAB\u68CB\u8C31\u3002';
	diggmess(mess);
}
function IE5BtoT()
{
	var s='';
	s+='Dim IE5_i,IE5_bchr,IE5_temp,IE5_len,IE5_tstr\n';
	s+='IE5_temp = ""\n';
	s+='If not IsNull(IE5XML) Then\n';
	s+='  IE5_len = lenb(IE5XML)\n';
	s+='  For IE5_i = 1 to IE5_len\n';
	s+='    IE5_bchr = ascb(midb(IE5XML,IE5_i,1))\n';
	s+='    If IE5_bchr > 127 Then\n';
	s+='      IE5_tstr = ascb(midb(IE5XML,IE5_i+1,1))\n';
	s+='      IE5_temp = IE5_temp&chr(IE5_bchr*256+IE5_tstr)\n';
	s+='      IE5_i = IE5_i+1\n';
	s+='    Elseif IE5_bchr > 0 then\n';
	s+='      IE5_temp = IE5_temp&chr(IE5_bchr)\n';
	s+='    End If\n';
	s+='  Next\n';
	s+='End If\n';
	s+='IE5XML = IE5_temp\n';
	if (window.execScript) execScript(s,'vbscript');
	else IE5XML = '0\u811A\u672C\u51FA\u9519';
}
var IE5XML;
function ShowMess(t,page)
{
	var xmlhttp=false;
	try {xmlhttp=new ActiveXObject('Msxml2.XMLHTTP');}
	catch (e0) {try {xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');}
	catch (e1) {try {xmlhttp=new XMLHttpRequest();}
	catch (e2) {alert('\u5BF9\u4E0D\u8D77\uFF0C\u60A8\u7684\u6D4F\u89C8\u5668\u4E0D\u652F\u6301xmlhttp\u7EC4\u4EF6\uFF0C\u8BF7\u66F4\u6362\u4E3A\u6700\u65B0\u7248\u672C\uFF01');return;}}}
	xmlhttp.open('POST','/hldcg/search/mess.asp',true);
	xmlhttp.onreadystatechange=function()
	{
		if ((xmlhttp.readyState==4)||(xmlhttp.readyState=='complete'))
		{
			if(xmlhttp.status==200)
			{
				var t;
				try {t=xmlhttp.responseText; if (escape(t.substr(0,1))=='%A1') {IE5XML=xmlhttp.responseBody;IE5BtoT();t=IE5XML;}}
				catch (exception) {IE5XML=xmlhttp.responseBody;IE5BtoT();t=IE5XML;}
				if (t.length>1) t=t.substr(1); else t='';
				document.getElementById('dpxqmess').innerHTML=t;
			}
			else alert('\u51FA\u9519\u4E86');
		}
	}
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('type='+t+'&page='+page);
}
function ClearMess()
{
	document.getElementById('mm_info').value='';
}
function SendMess()
{
	var mto=document.getElementById('mm_to').value;
	var mtitle=document.getElementById('mm_title').value;
	var minfo=document.getElementById('mm_info').value;
	var xmlhttp=false;
	try {xmlhttp=new ActiveXObject('Msxml2.XMLHTTP');}
	catch (e0) {try {xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');}
	catch (e1) {try {xmlhttp=new XMLHttpRequest();}
	catch (e2) {alert('\u5BF9\u4E0D\u8D77\uFF0C\u60A8\u7684\u6D4F\u89C8\u5668\u4E0D\u652F\u6301xmlhttp\u7EC4\u4EF6\uFF0C\u8BF7\u66F4\u6362\u4E3A\u6700\u65B0\u7248\u672C\uFF01');return;}}}
	xmlhttp.open('POST','/hldcg/search/mess.asp',true);
	xmlhttp.onreadystatechange=function()
	{
		if ((xmlhttp.readyState==4)||(xmlhttp.readyState=='complete'))
		{
			if(xmlhttp.status==200)
			{
				var t;
				try {t=xmlhttp.responseText; if (escape(t.substr(0,1))=='%A1') {IE5XML=xmlhttp.responseBody;IE5BtoT();t=IE5XML;}}
				catch (exception) {IE5XML=xmlhttp.responseBody;IE5BtoT();t=IE5XML;}
				if (t.length>1) t=t.substr(1); else t='';
				if (t.substr(0,5)!='<div ') alert(t);
				else document.getElementById('dpxqmess').innerHTML=t.split('|').join('<br>');
			}
			else alert('\u53D1\u9001\u5931\u8D25');
		}
	}
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('type=add&to='+myURLEscape(mto)+'&title='+myURLEscape(mtitle)+'&info='+escape(minfo).replace(/\%([8-9A-F][0-9A-F])/gi,'%u00$1'));
}
function ReadMess(id,index)
{
	var xmlhttp=false;
	try {xmlhttp=new ActiveXObject('Msxml2.XMLHTTP');}
	catch (e0) {try {xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');}
	catch (e1) {try {xmlhttp=new XMLHttpRequest();}
	catch (e2) {alert('\u5BF9\u4E0D\u8D77\uFF0C\u60A8\u7684\u6D4F\u89C8\u5668\u4E0D\u652F\u6301xmlhttp\u7EC4\u4EF6\uFF0C\u8BF7\u66F4\u6362\u4E3A\u6700\u65B0\u7248\u672C\uFF01');return;}}}
	xmlhttp.open('POST','/hldcg/search/mess.asp',true);
	xmlhttp.onreadystatechange=function()
	{
		if ((xmlhttp.readyState==4)||(xmlhttp.readyState=='complete'))
		{
			if(xmlhttp.status==200)
			{
				var t;
				try {t=xmlhttp.responseText; if (escape(t.substr(0,1))=='%A1') {IE5XML=xmlhttp.responseBody;IE5BtoT();t=IE5XML;}}
				catch (exception) {IE5XML=xmlhttp.responseBody;IE5BtoT();t=IE5XML;}
				if (t.length>1) t=t.substr(1); else t='';
				document.getElementById('dpxqreadmess').innerHTML=t.replace(/(\r\n|\r\n)/gi,'<BR>').replace(/(<BR>){2,}/gi,'<BR><BR>');
				document.getElementById('dpxqlistmess').rows[index].cells[0].style.backgroundColor='#CCC';
			}
			else alert('\u51FA\u9519\u4E86');
		}
	}
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('type=read&id='+id);
}
function convliansai(s)
{
	return s.replace(/^(\u4E0A\u6D77\u6D66\u4E1C|\u4E0A\u6D77|\u6CB3\u5317|\u7164\u77FF|\u5F00\u6EE6|\u53A6\u95E8|\u6C88\u9633|\u5927\u8FDE|\u5883\u4E4B\u8C37\u6C88\u9633|\u5E7F\u4E1C|\u5317\u4EAC|\u9ED1\u9F99\u6C5F|\u6D59\u6C5F|\u6C5F\u82CF|\u56DB\u5DDD|\u6E56\u5317|\u6CB3\u5357|\u7518\u8083|\u91CD\u5E86|\u6E56\u5357|\u5409\u6797|\u706B\u8F66\u5934|\u4E91\u5357|\u5C71\u4E1C).*$/gi,'$1');
}
if (window!=parent)
{
	initboard();
	DrawEdit();
	if (getvar('viewurl').search(/isSave=yes/gi)!=-1) EditSave();
	else initdata();
	TT[1]=Number(new Date());
}