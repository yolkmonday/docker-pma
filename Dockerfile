FROM nginx:alpine

RUN chmod -R 777 storage/
RUN chmod -R 777 storage/logs/
RUN chmod -R 777 storage/framework/
RUN chmod -R 777 bootstrap/cache/
