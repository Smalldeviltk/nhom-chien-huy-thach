<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <TITLE>Nhóm 8 - Đồ án cuối kỳ</TITLE>
        <LINK REL="SHORTCUT ICON" href="logo">
        <META http-equiv=Content-Type content="text/html; charset=UTF-8">
    </HEAD>
    <BODY bgColor=#000000 scroll=no>
        <FORM name=loading>
            <TABLE height="90%" width="100%" align=center>
                <TBODY>
                    <TR></TR>
                    <TR>
                        <TD vAlign=center>
                            <P align=center>
                                <FONT face=verdana>
                                    <FONT style="FONT-SIZE: 10pt" 
                                          color=red>
                                        <B>Hệ thống đang tự chuyển...</B>
                                    </FONT>
                            </P>
                            <FONT style="FONT-SIZE: 8pt">
                                <P align=center>
                                    <INPUT
                                        style="BORDER-RIGHT: medium none;
                                        BORDER-TOP: medium none;
                                        BORDER-LEFT: medium none;
                                        COLOR: #ffffff;
                                        BORDER-BOTTOM: medium none;
                                        BACKGROUND-COLOR: #000000;
                                        TEXT-ALIGN: center"
                                        size=47 name=percent>
                                    <BR>
                            </FONT>
                            <INPUT
                                style="PADDING-RIGHT: 0px;
                                PADDING-LEFT: 0px;
                                FONT-WEIGHT: bolder;
                                PADDING-BOTTOM: 0px;
                                COLOR: #ffffff;
                                BORDER-TOP-STYLE: none;
                                PADDING-TOP: 0px;
                                FONT-FAMILY: Arial;
                                BORDER-RIGHT-STYLE: none;
                                BORDER-LEFT-STYLE: none;
                                BACKGROUND-COLOR: #353535;
                                BORDER-BOTTOM-STYLE: none" 
                                size=45 name=chart>
                            <BR>
                            <B>
                                <SCRIPT>
                                    var bar = 0
                                    var line = "||"
                                    var amount = "||"
                                    count()
                                    function count() {
                                        bar = bar + 2
                                        amount = amount + line
                                        document.loading.chart.value = amount
                                        document.loading.percent.value = bar + "%"
                                        if (bar < 99)
                                        {
                                            setTimeout("count()", 100);
                                        }
                                        else
                                        {
                                            window.location = "application/views/scripts/index/index.phtml";
                                        }
                                    }
                                </SCRIPT>
                                <FONT style="FONT-SIZE: 8pt" face=Verdana color=#ff6600>
                                    L o a d i n g&nbsp;&nbsp; p l e a s e&nbsp;&nbsp; w a i t . . .
                                </FONT>
                            </B>

                            <TABLE class=tablefill cellPadding=4 width=364 align=center>
                                <TBODY></TBODY>
                            </TABLE>
                            <P align=center>
                                <FONT face=verdana>
                                    <FONT style="FONT-WEIGHT: 700; FONT-SIZE: 8pt" color=green>(</FONT>
                                    <FONT style="FONT-SIZE: 8pt" color=#3187ce> </FONT>
                                    <A href="application/views/scripts/index/index.phtml">
                                        <FONT style="FONT-SIZE: 8pt" color=green>Click vào đây nếu không muốn đợi lâu...</FONT>
                                    </A>
                                    <FONT style="FONT-SIZE: 8pt" color=green>)</FONT>
                                </FONT>
                            </P>
                        </TD>
                    </TR>
                </TBODY>
            </TABLE>
        </FORM>
    </BODY>
</HTML>