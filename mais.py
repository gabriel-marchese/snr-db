from conexao import criar_conexao, fechar_conexao

def insere_paciente(con, cpf, status):
     cursor = con.cursor()
     sql = "INSERT INTO pacientes (cpf, status) values (%s, %s)"
     valores = (cpf, status)
     cursor.execute(sql, valores)
     cursor.close()
     con.commit()


def main():
    con = criar_conexao("sql10.freemysqlhosting.net", "sql10520803", "lJa2iux6Fu", "sql10520803")
    insere_paciente(con, "16542645196", "1")
    insere_sensor(con, "2", "11", "12", "65", "41", "0")
    fechar_conexao(con)

def insere_sensor(con, temperatura, altura, peso, oxigenacao, saturacao, status):
    cursor = con.cursor()
    sql = """UPDATE pacientes SET temperatura = %s, altura=%s, peso=%s, oxigenacao=%s, saturacao=%s, status =%s WHERE status = '1'"""
    valores = (temperatura, altura, peso, oxigenacao, saturacao, status)
    cursor.execute(sql, valores)
    cursor.close()
    con.commit()

if __name__ == "__main__":
    main()


# class Pacientes(Base):
#    tablename = "pacientes"
#     id = Column("id", Integer, primary_key=True, autoincrement=True)
#     status = Column("status", Integer)

