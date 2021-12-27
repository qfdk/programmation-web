const Person = require("./person");
const Car = require("./car");

console.log("程序开始/ 入口文件");
const goToBeijing = () => {
    const car = new Car("奥迪");

    const person = new Person("随便", 18);
    person.买车(car);

    person.开车去("南京", car);
    person.happy("唱歌,跳舞");
    const person2 = new Person("随便2", 8);

    const persons = [];
    persons.push(person);
    persons.push(person2);

    console.log(typeof persons);
    console.log(JSON.stringify(persons, null, 2));

    const a = JSON.parse(`
        [
          {
            "name": "随便",
            "age": 18,
            "cars": []
          },
          {
            "name": "随便2",
            "age": 8,
            "cars": []
          }
        ]
    `);
    console.log(a, typeof a);

    // const bmw = new Car("BMW");
    // person.买车(bmw);
    // person.开车去("北京", bmw);

    // console.log(person);
};

goToBeijing();

// const getConnextion = () => {
//     const dbh = "xxx";
//     return dbh;
// };
//
// const dbh = getConnextion();
// sql = "insert xxx1";
// dbh.prepare(sql)
// dbh.exucte()
// sql = "insert xxx2";
// dbh.prepare(sql)
// dbh.exucte()
// sql = "insert xxx3";
// dbh.prepare(sql)
// dbh.exucte()

class Connextion {
    constructor() {
        this.dbh = "面值";
    }

    getConnextion = () => {
        return this.dbh;
    };
    insert = (num) => {
        // dbh.prepare(sql+num)
        // dbh.exucte()
    };
}

const dbhClass = new Connextion();
dbhClass.getConnextion();
dbhClass.insert(1);
dbhClass.insert(2);
dbhClass.insert(3);

function onePlusN($n) {
    return 1 + $n;
}

onePlusN(99);
