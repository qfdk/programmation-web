$(document).ready(function () {
    // 抽签

    function random(x) {
        return Math.floor(Math.random() * x) + 1; // floor返回比自身小的最大整数，random返回0-1之间的小数
    }

    // console.log(random(5));

    $('#random').on('click', () => {
        alert(random(5)); //结果：返回0-1之间的随机小数*整数x，floor返回1(0+1)~5(0+4)之间的随机整数
    });

});