## javascript

### 注意

- 代码不清楚的情况下用 `var` (几乎万能)
- ES6 语法
    - `let` 跟 `var` 效果基本一样, 可变变量，可以更改
    - `const` 默认情况下不能更改

PS： const 在 object 的情况下，是可以更改的， 🌰

```javascript
const a = 1;
// 报错，因为 a 不是 object 的类型
// Uncaught TypeError: Assignment to constant variable
a = 2;

const obj = {
    name: "liu"
}
// 报错
obj = {name: "xxx"};
// 警告 /!\ 不会报错; 会更改 obj.name 的值
obj.name = "ABC";
```
## 数组操作(Array)

