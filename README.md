# PHP开发实践教程

PHP是世界上最好的语言

## 一、入门基础

### 1. 动态网页原理

![PHP动态网页原理](http://www.surfphpseo.com/d/file/webjsn/2013-09-12/2371c5d3b86aaf75512d4a60886fa9dd.jpg)

- 浏览器 B
- 服务器 S
- URL http://vip.book.sina.com.cn:81/weibobook/book/5352242.html?pos=202068&id=123
    + 协议 http, https
    + 主机 域名: localhost ip地址: 127.0.0.1
    + 端口 80, 443
    + 路径
    + 文件 
    + 参数

### 2. LA(N)MP技术架构

- Linux           操作系统
- Apache/Nginx    WEB服务器
- Mysql           数据库服务器
- PHP             脚本解析器

### 3. 本地开发环境搭建

- PHPStudy 
    + [官网下载](http://www.phpstudy.net/download.html)

### 4. 开发工具

- Sublime_Text
    + [官网下载](http://www.sublimetext.com/)
    + [流风清音优化版](http://haojian138.blog.163.com/blog/static/212643110201393010438357/)

- PHPStorm
    + [官网下载](https://www.jetbrains.com/phpstorm/download/#section=windows)

### 5. 自修技能

- Markdown
    + [语法教程](https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=0&rsv_idx=1&tn=baidu&wd=markdown%20%E8%AF%AD%E6%B3%95%E6%95%99%E7%A8%8B&rsv_pq=92bcdacc000076c5&rsv_t=3c24fwgtKKclOa9QBRPvFPeMJ6v6bO%2BOmG1IKQKYpjkp3J7lqJhdTj%2Broog&rqlang=cn&rsv_enter=1&rsv_sug3=26&rsv_sug1=18&rsv_sug7=100)
    + [推荐工具](https://www.zybuluo.com/mdeditor)

- Git
    + 基本命令
        clone, add, commit, push, pull
    + 软件下载
        * [Git: https://git-scm.com/](https://git-scm.com/)
        * [TortoiseGit: https://tortoisegit.org/](https://tortoisegit.org/)
    + 在线教程
        - [史上最浅显易懂的Git教程](https://www.liaoxuefeng.com/wiki/0013739516305929606dd18361248578c67b8067c8c017b000/)
    + 命令速查    
        ![Git命令速查](https://static.oschina.net/uploads/img/201412/07180843_cbKA.jpg)
    + 代码托管平台
        * [github（国外）: https://github.com/](https://github.com/)
        * [coding（国内）: https://coding.net/](https://coding.net/)
    + 配置账号（引号中的内容替换为自己的信息）
        1. 配置用户名 `git config user.name "Your name"`
        2. 配置邮箱 `git config user.email "Your youremail@example.com"`
        3. 生成SSH秘钥，命令 `ssh-keygen -t rsa -C "youremail@example.com"`
        4. 上传公钥匙，默认存储路径 `C:\Users\Administrator\.ssh\id_rsa.pub`
