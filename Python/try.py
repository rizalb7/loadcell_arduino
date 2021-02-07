import serial
import MySQLdb

db=MySQLdb.connect("localhost", "root", "", "loadcell")
arduino=serial.Serial('COM3', 9600)
while True:
    kd=arduino.readline().decode('ascii')
    print(kd)
    try:
        cursor=db.cursor()
        cursor.execute("UPDATE tb_weight SET weight = '"+kd+"' WHERE id_weight=1")
        db.commit()
        cursor.close()
    except MySQLdb.IntegrityError:
        print ("Gagal Update Data")
