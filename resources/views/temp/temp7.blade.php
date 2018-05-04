@extends('layouts.dashboard')
@section('page_heading','map')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
	@if(0)
    <div>
        <a class='btn btn-primary'>Upload</a>
    </div><br>
	@endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            map
        </div>
        <div class="panel-body">
		<input type="button" onclick="window.open('http://www.dpxq.com/hldcg/dhtmlxq/frame_big5.htm','','width=760,height=415,resizeable=yes,status=yes')" value="转换棋谱" />
		@if(0)
            <center>
				文山陳建宇　先勝　文山王韋中(紅勝)
				</center>
			<center>
				<applet codebase="http://www.ccbridge.net/java/" code="javaxq.class" width="249" height="301">
				<param name="backColor" value="green">
				<param name="foreColor" value="white">
				<param name="movelist" value="87-57 82-52 89-77 90-91 99-89 80-72 29-37 20-32 36-35 91-41 76-75 10-11 77-65 41-48 27-25 33-34 35-34 11-61 65-73 61-64 34-33 32-51 25-55 52-55 57-55 64-34 19-29 22-42 89-87 34-33 87-67 42-43 75-74 33-34 29-22 43-42 74-64 42-32 39-17 48-78 37-25 78-73 25-13 34-36 13-21 32-31 22-42 36-56 67-57 73-76 49-58 56-46 57-47 46-47 42-47 70-52 59-49 51-70 47-40 50-51 40-41 51-50 55-15 ">
				</applet>
			</center>
			@endif
			@if(0)
			[DhtmlXQ]
[DhtmlXQ_ver]www_dpxq_com[/DhtmlXQ_ver]
[DhtmlXQ_init]500,350[/DhtmlXQ_init]
[DhtmlXQ_title]文山陳建宇　先勝　文山王韋中[/DhtmlXQ_title]
[DhtmlXQ_event]2018「棋夢盃」全國象棋等級分分組排名試驗賽[/DhtmlXQ_event]
[DhtmlXQ_date]2018-03-24[/DhtmlXQ_date]
[DhtmlXQ_place]七張[/DhtmlXQ_place]
[DhtmlXQ_round][/DhtmlXQ_round]
[DhtmlXQ_table][/DhtmlXQ_table]
[DhtmlXQ_red]陳建宇[/DhtmlXQ_red]
[DhtmlXQ_redteam][/DhtmlXQ_redteam]
[DhtmlXQ_redrating][/DhtmlXQ_redrating]
[DhtmlXQ_blacktime][/DhtmlXQ_time]
[DhtmlXQ_black]王韋中[/DhtmlXQ_black]
[DhtmlXQ_blackteam][/DhtmlXQ_blackteam]
[DhtmlXQ_blackrating][/DhtmlXQ_blackrating]
[DhtmlXQ_blacktime][/DhtmlXQ_time]
[DhtmlXQ_result]紅勝[/DhtmlXQ_result]
[DhtmlXQ_open]D29 顺炮直车对横车[/DhtmlXQ_open]
[DhtmlXQ_remark][/DhtmlXQ_remark]
[DhtmlXQ_author][/DhtmlXQ_author]
[DhtmlXQ_binit]0919293949596979891777062646668600102030405060708012720323436383[/DhtmlXQ_binit]
[DhtmlXQ_movelist]774772427967808189797062192710222625813166650001675531381715232425240151556351542423224115454245474554240919123279772423775732336564232419123332645432222907386827156863150324260311222112322646574763663948463647373637323760424939416037304041303141404505[/DhtmlXQ_movelist]
[DhtmlXQ_type]實戰全局/開局[/DhtmlXQ_type]
[DhtmlXQ_timerule][/DhtmlXQ_timerule]
[DhtmlXQ_endtype][/DhtmlXQ_endtype]
[DhtmlXQ_owner][/DhtmlXQ_owner]
[DhtmlXQ_firstnum]0[/DhtmlXQ_firstnum]
[DhtmlXQ_gametype][/DhtmlXQ_gametype]
[DhtmlXQ_generator]www.ccbridge.net[/DhtmlXQ_generator]
[/DhtmlXQ]
@endif
@if(0)@endif
<iframe src="/DhtmlXQ_www_dpxq_com/DhtmlXQ_www_dpxq_com_big5.htm" frameborder="0" scrolling="no" width="500" height="350" style="width:500px;height:350px;" name='NoFile_[DhtmlXQiFrame][DhtmlXQ_ver]www_dpxq_com[/DhtmlXQ_ver][DhtmlXQ_init]500,350[/DhtmlXQ_init][DhtmlXQ_binit]0919293949596979891777062646668600102030405060708012720323436383[/DhtmlXQ_binit][DhtmlXQ_title]文山陳建宇　先勝　文山王韋中[/DhtmlXQ_title][DhtmlXQ_event]2018「棋夢盃」全國象棋等級分分組排名試驗賽[/DhtmlXQ_event][DhtmlXQ_date]2018-03-24[/DhtmlXQ_date][DhtmlXQ_place]七張[/DhtmlXQ_place][DhtmlXQ_red]陳建宇[/DhtmlXQ_red][DhtmlXQ_black]王韋中[/DhtmlXQ_black][DhtmlXQ_result]紅勝[/DhtmlXQ_result][DhtmlXQ_open]D29 顺炮直车对横车[/DhtmlXQ_open][DhtmlXQ_movelist]774772427967808189797062192710222625813166650001675531381715232425240151556351542423224115454245474554240919123279772423775732336564232419123332645432222907386827156863150324260311222112322646574763663948463647373637323760424939416037304041303141404505[/DhtmlXQ_movelist][DhtmlXQ_type]實戰全局/開局[/DhtmlXQ_type][DhtmlXQ_firstnum]0[/DhtmlXQ_firstnum][DhtmlXQ_refer]http%3A//www.dpxq.com/%0D%0Ahttp%3A//www.dpxq.com/hldcg/dhtmlxq/frame.htm[/DhtmlXQ_refer][DhtmlXQ_generator]www.dpxq.com[/DhtmlXQ_generator][/DhtmlXQiFrame]'></iframe>
		
		</div>
    </div>
</div>
@section('script')
<script>

</script>
@if(0)
<script src="https://www.java.com/js/deployJava.js"></script> 
<script>
    var attributes = { 
        id:'ohApplet',
        code:'OHLib',
        codebase: 'java',
        archive: 'OHLib.jar',   
        width:1, 
        height:1,
    } ;
    var parameters = { 
        jnlp_href: 'OHLib.jnlp',
        classloader_cache: 'false',
    } ;
    deployJava.runApplet(attributes, parameters, '1.6');
</script>
@endif
@stop
@stop