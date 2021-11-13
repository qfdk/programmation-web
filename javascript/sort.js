// 交换两数的值
var a = 1; // number
var b = 2; // number
const c = {a: 1, b: 2} // object

// 无法更改 a，b 的值，只能 返回一个新值
function swap(a, b) {
    var tmp = b;
    b = a;
    a = tmp;
    console.log("------swap-----")
    console.log(a, b)
    console.log("------swap----")
    return {a, b}
}

// function swap(c) {
//     var tmp = c.b;
//     c.b = c.a;
//     c.a = tmp;
// }
//
// swap(c)
// swap(c.a, c.b)
// const swapR = swap(a, b);
// console.log(swapR.a, swapR.b)
// console.log(swapR)
// [a, b] = [b, a];
// console.log(typeof [a, b])
// 排序

const table = [3, 2, 1];
// 冒泡排序
// 2,3,1
// 2,1,3
// 1,2,3

