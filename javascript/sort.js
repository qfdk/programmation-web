// 交换两数的值
var a = 1; // number
var b = 2; // number
const c = {a: 1, b: 2} // object

// 无法更改 a，b 的值，只能 返回一个新值
/**
 *
 * @param a
 * @param b
 * @returns {{newB, newA, name: string}}
 */
function swap(a, b) {
    var tmp = b;
    b = a;
    a = tmp;
    console.log("------swap-----")
    console.log(a, b)
    console.log("------swap----")
    // 返回了一个新的 object
    return {newA: a, newB: b, name: "liu"}
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
// console.log(swapR.newA, swapR.newA)
// console.log(swapR)
// 这里改变了a,b 的值
// a = swapR.newA;
// b = swapR.newB;
// console.log(a, b)
//------------------
// [a, b] = [b, a];
// console.log(typeof [a, b])
// 排序

/**
 * 冒泡排序
 * @param array 数字数组
 * 只有数字
 */
function mySort(array) {
    for (let i = 0; i < array.length - 1; i++) {
        // console.log(`第 ${i} 排序`);
        for (let j = 0; j < array.length - 1 - i; j++) {
            // j/j+1
            // 判断于后一个数的关系，如果大于后面的数
            // console.log("准备对比：")
            // console.log(`input: ${array}`)
            if (array[j].age > array[j + 1].age) {
                // 交换下位置
                const tmp = array[j];
                array[j] = array[j + 1];
                array[j + 1] = tmp;
                // console.log(`交换 ： ${array[j]} <---> ${array[j + 1]}`);
                // console.log(`output: ${array}`);
            }
        }
        // console.log(`---------------`);
    }
};

// mySort(table)
// console.log(table)
// 冒泡排序
// 第一次
// 3,4,2,1
// 3,2,4,1
// 3,2,1,4

// 第二轮
// 2,3,1,4
// 2,1,3,4

// 第三轮
// 1,2,3,4

//第一轮
// 2,3,1
// 2,1,3

// 第二轮
// 1,2,3


// const myTest = {
//     name: "liu"
// };
//
// console.log(myTest["name"])
// console.log(myTest.name)

const students = [
    {
        name: "name1",
        age: 4
    },
    {
        name: "name2",
        age: 3
    },
    {
        name: "name3",
        age: 88
    },
    {
        name: "name3",
        age: 1,
    }
]

// const newTable = table.sort((a, b) => a - b);
// console.log(newTable)

// mySort(students);
// console.log(students)


// 每次返回一个新的 object
// const newTable = students.sort((stu1, stu2) => -stu1.age + stu2.age);
// console.log(newTable)

const test = [1, 2, 3, 4];

/**
 * 取得大于三的数
 */
function getNewTable(array) {
    const newTable = [];
    for (let i = 0; i < array.length; i++) {
        if (array[i] >= 3) {
            newTable.push(array[i]);
        }
    }
    return newTable;
}

console.log(getNewTable(test))

/**
 * 根据年龄获取学生
 * @param students 老学生
 * @param targetAge targetAge
 */
function getStudent(students, targetName, targetAge) {
    // 临时变量
    const newStudents = [];

    for (let i = 0; i < students.length; i++) {
        if (students[i].name === targetName && students[i].age >= targetAge) {
            // 把合格的学生 放在一个地方
            newStudents.push(students[i]);
        }
    }
    // 新的学生
    return newStudents;
}

// const studentsWithName3 = getStudent(students, "name3", 3);
// for (const stu of studentsWithName3) {
//     console.log(stu.age)
// }

// console.log(studentsWithName3)
// console.log(getStudent(students, "name3")[0])

students
    .filter(student => student.age >= 3) // age>=3
    .forEach(student => console.log(student.age)) // 显示 age