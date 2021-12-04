$(document).ready(function () {

    
    const todolist = [];
    
//输入文字、点击按钮、放进表格
    

    //点击按钮
    $('#myButton').on('click', () => {
        //获取输入文字
        var inputValue = $('#myInput').val();
        //判断输入文字长度
        if (inputValue.length > 0) {
            //alert(inputValue);
            //放进表格
            todolist.push(inputValue);
            console.log(todolist);
            //页面显示
            $('#myUl').append(`<li>${inputValue}</li>`);
        }
        
    });

    

    // ajax 请求
    $('#ajaxBtn').on('click', () => {
        $.get('./ajax.json').then(response => {
            // 相当于 readyState===4 && status ===200
            console.log(response)
            // $('#myUl').append(`${response}`);

            for (const data of response) {
                $('#myUl').append(`<li>${data.name} - ${data.age}</li>`);
            }
        });
    });


   
    
    $('#myInput').on('input', () => {
        console.log($('#myInput').val());
    });

    for (let i = 0; i < 10; i++) {
        
       // $('#myUl').append(`<li>测试</li>`);
    }
    

    // 抽签
    function getRandomIntInclusive(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min; //含最大值，含最小值 

    }

    $('#random').on('click', () => {
        alert(getRandomIntInclusive(1, 5));
    });


    // function createHttpRequest() {
    //     var req = null;
    //     if (window.XMLHttpRequest) {
    //         req = new XMLHttpRequest();
    //     } else {
    //         try {
    //             req = new ActiveXObject("Msxml2.XMLHTTP");
    //         } catch (e) {
    //             try {
    //                 req = new ActiveXObject("Microsoft.XMLHTTP");
    //             } catch (e2) {
    //             }
    //         }
    //     }
    //     if (req === null) {
    //         alert("Votre␣navigateur␣ne␣supporte␣pas␣l’objet␣XMLHTTPRequest...");
    //     }
    //     return req;
    // }
    //
    // function lancerRequete() {
    //     var req = createHttpRequest();
    //     req.onreadystatechange = function () {
    //         if (req.readyState === 4) {
    //             console.log(req)
    //         }
    //     }
    //     req.open("GET","./ajax.json", true);
    //     req.send(null);
    // }
    // lancerRequete();
});