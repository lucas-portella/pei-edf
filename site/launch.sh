#!/usr/bin/env bash

# inicia o PHP de forma local na porta 8000 e redireciona os logs

[ -d logs ] || mkdir logs
php -S localhost:8000 2>&1 | tee logs/acessos.log
