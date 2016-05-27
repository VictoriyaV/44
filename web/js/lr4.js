var DT = new Date,
        Ye = DT.getFullYear(),
        Mo = DT.getMonth(),
        Da = DT.getDate(),
        Cd = new Date(Ye, Mo, Da).getTime();
Ye = (Da < 23 && Mo < 7) ? Ye : Ye + 1;
var Fd = new Date(Ye, 7, 23).getTime();
var R = Math.ceil((Fd - Cd) / 8.64e7); // 8.64e7 - число милисекунд в году
alert('До ближайшего 23 августа ' + ' - ' + R + ' дн.');