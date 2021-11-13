## Programmation web (网络编程)

简单的笔记

### Markdown 语法
```markdown
# 一级标题
## 二级标题
### 三级标题

- 第一个链接
- 第二个链接
```
- SQL 基础操作 (CRUD)
    - 增 insert
    - 删 delete
    - 改 update
    - 查 select
  
### git 基本操作命令

```bash
# 把字符串写入到 README 文件里面
echo "# programmation-web" >> README.md
# 初始化 文件夹 （只有第一次使用）
git init
# 只添加 README 文件 不会添加其他的文件
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/qfdk/programmation-web.git
git push -u origin main
```