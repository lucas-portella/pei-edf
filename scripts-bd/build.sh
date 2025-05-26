#!/usr/bin/env bash

# script que le todos os scripts de banco de dados
# le o nome do usuario de banco de dados por parametro posicional
# caso nenhum argumento seja passado, assume que seja o usuario root

if [ $# -eq 0 ]; then
	user=root
else
	user=$1
fi

for script in ./*.sql; do
	mysql -u $user -p < $script
done
