import mysql.connector

mydb =mysql.connector.connect(host="sql10.freemysqlhosting.net", user="sql10520803", password="lJa2iux6Fu", database="sql10520803")



#mycursor.execute("""UPDATE pacientes SET temperatura='%s' WHERE status=%s""",(temperatura, status))

temperatura = "12"
altura = "13"
peso = "14"
oxigenacao = "15"
saturacao = "16"
status = "1"

mycursor = mydb.cursor()

sql = "UPDATE pacientes SET temperatura = %s, altura=%s, peso=%s, oxigenacao=%s, saturacao=%s, status =%s WHERE status = '0'" % (temperatura, altura, peso, oxigenacao, saturacao, status)
valores=(altura)

mycursor.execute(sql)

mydb.commit()

print(mycursor.rowcount, "record(s) affected")