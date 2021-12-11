module.exports =
    class Money {
        constructor(面值) {
            this.面值 = 面值;
            console.log(`${this.面值} 的💰`);
        }

        get面值() {
            return this.面值;
        }

        set面值(new面值) {
            this.面值 = new面值;
        }
    };