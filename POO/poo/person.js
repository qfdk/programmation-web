module.exports = class Person {
    /**
     *  构造函数 是用来初始化的
     * @param name 姓名
     * @param age 年龄
     */
    constructor(name, age, car) {
        this.name = name;
        this.age = age;
        if (car) {
            this.cars = [car]; // 已经有车了
        } else {
            this.cars = []; // 没车
        }
        console.log(`${this.name}===> 出生了，车 ： ${car ? true : false}`);
    }

    /**
     * 开车方法
     * @param location 位置
     */
    开车去(location, car) {
        console.log(`${this.name}===> 开(${car.mark})车去: ${location}`)
    }

    // public bool happy(param)

    happy(action) {
        console.log(`${this.name}===> ${action}`);
        // console.log(`${this.name}===> 唱歌`);
    }
    
    买车(car) {
        this.cars.push(car);
        console.log(`${this.name}===>买车了:${car.mark}`)
    }
}