# �ӹٷ�PHP���񹹽�
FROM       php

# ��index.php���Ƶ������ڵ�/var/wwwĿ¼��
ADD        index.php /var/www/

# ���Ⱪ¶8080�˿�
EXPOSE     8080

# ��������Ĭ�Ϲ���Ŀ¼Ϊ/var/www
WORKDIR    /var/www/

# �������к�Ĭ��ִ�е�ָ��
ENTRYPOINT ["php", "-S", "0.0.0.0:8080"]