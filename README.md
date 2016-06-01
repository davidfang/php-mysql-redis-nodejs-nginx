# php-mysql-redis-nodejs-nginx
php-mysql-redis-nodejs-nginx
- node在第一次安装时候修改docker/node/Dockerfile文件
- 在opt/htocs/node 下建立nodejs项目代码，可以克隆[示例代码](https://github.com/ccoenraets/react-trader)
- 复制上步中package.json至docker/node内
- docker-compose build 然后  docker-compose up
- 恢复docker/node/Dockerfile 然后执行：docker-compose build 和 docker-compose up
