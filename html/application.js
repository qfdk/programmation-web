$(document).ready(function () {
    $('#myButton').on('click', () => {
        var inputValue = $('#myInput').val();
        if (inputValue.length > 0) {
            alert(inputValue);
        }

    });
    $('#myInput').on('change', () => {
    });
    for (let i = 0; i < 10; i++) {
        $('#myUl').append(`<li>测试</li>`);
    }

    function getRandomIntInclusive(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min; //含最大值，含最小值 

    }

    $('#random').on('click', () => {
        alert(getRandomIntInclusive(1, 5));
    });

    $.get('./data.json').then(response => {
        $('#myUl').append(`<li>${response.name} - ${response.age}</li>`);
    })
});