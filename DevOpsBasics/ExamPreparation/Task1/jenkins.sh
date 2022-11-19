#!/bin/bash

echo "* Add hosts ..."

echo "192.168.99.100 ansible.dob.lab ansible" >> /etc/hosts
echo "192.168.99.101 jenkins.dob.lab jenkins" >> /etc/hosts
echo "192.168.99.102 nagios.dob.lab nagios" >> /etc/hosts
echo "192.168.99.103 docker.dob.lab docker" >> /etc/hosts

echo "* Firewall - open port 8080 ..."

firewall-cmd --add-port=8080/tcp --permanent
firewall-cmd --reload