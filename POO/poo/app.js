const Person = require("./person");
const Car = require("./car");

console.log("程序开始/ 入口文件");
const goToBeijing = () => {
    const car = new Car("奥迪");

    const person = new Person("随便", 18);
    // person.买车(car);

    person.开车去("南京", car);
    person.happy("唱歌,跳舞");

    // const bmw = new Car("BMW");
    // person.买车(bmw);
    // person.开车去("北京", bmw);

    console.log(person);
}

goToBeijing();