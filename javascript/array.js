const table = [1, 2, 3, 4, 5];
// index: 0,1,2,3,4
var x = 2;
// table[x]

// 初始值；条件；增量 （针对于初始值的）
for (var index = 0; index < 5; index++) {
    table[index] =  table[index] *2
}
console.log(table)
console.log(typeof table)
// 返回一个新的数组
console.log(table)
const newTable = table.map(element=>element*2);
console.log(newTable)
table.forEach(element => {
    console.log(element)
})

for (const element of table) {
    console.log(element)
}

for (const index in table) {
    console.log(table[index])
}
