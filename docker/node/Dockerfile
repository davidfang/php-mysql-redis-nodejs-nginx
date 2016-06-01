FROM node:4.4.5

#RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

COPY ./package.json /usr/src/app/
ADD . /usr/src/app

#RUN npm install
#EXPOSE 3000
#第一次安装的时候进行下面install,然后再注释掉
#CMD [ "npm", "install" ]
CMD [ "npm", "start" ]
