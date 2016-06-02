# php-mysql-redis-nodejs-nginx
php-mysql-redis-nodejs-nginx
1. docker-compose build
2. 在opt/htocs/node 下建立nodejs项目代码，可以克隆[示例代码](https://github.com/ccoenraets/react-trader)
3. 复制上步中package.json至docker/node内
4. node在第一次安装时候修改docker-compose.yml文件,去掉npm install前注释，然后 docker-compose up,再docker-compose down 
5. 恢复docker/node/Dockerfile 然后执行：docker-compose up
