package com.example.sqlite.model;

import static android.content.Context.MODE_PRIVATE;

import android.annotation.SuppressLint;
import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;

public class NotaDAO {

    SQLiteDatabase sqliteDB;
    public NotaDAO(Context c){
        sqliteDB = c.openOrCreateDatabase("db", MODE_PRIVATE,null);
        sqliteDB.execSQL("Create table  if not exists usr(id INTEGER PRIMARY KEY AUTOINCREMENT,"+ "titulo VARCHAR,"+"txt VARCHAR);" );

    }
    public void cadastrarNovaNota(Nota nota){
        ContentValues cv = new ContentValues();
        cv.put("titulo",nota.getTitulo());
        cv.put("txt",nota.getTxt());
        sqliteDB.insert("nota",null, cv);
    }
    public void atualizarNota(Nota nota){

    ContentValues cv = new ContentValues();
    cv.put("titulo", nota.getTitulo());
    cv.put("texto", nota.getTxt());
    sqliteDB.update("nota", cv, "id = ?", new String[]{String.valueOf(nota.getId())});

}
    public void deletaNota(Nota nota){
    sqliteDB.delete("nota","id = ?", new String[]{String.valueOf(nota.getId())});
    }
    public Nota getNota(Integer id){

        String sql="SELECT * FROM nota WHERE id = ?";
        Cursor cv = sqliteDB.rawQuery(sql, new String[]{String.valueOf(id)});
        //Recupenado um registro relacionado e convertendo para objeto Nota
        cv.moveToFirst();
        @SuppressLint("Range") Nota nota = new Nota(cv.getInt(cv.getColumnIndex("id")), cv.getString(cv.getColumnIndex("titulo")), cv.getString(cv.getColumnIndex("txt")));
        return nota;

    }

}
