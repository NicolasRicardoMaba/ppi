package com.example.sqlite;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.ContentValues;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;

import java.sql.SQLData;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    SQLiteDatabase sqliteDB;
    ListView listView;
    Button buttonInse;
    TextView nomeInserir;
    @SuppressLint("Range")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        listView = findViewById(R.id.listView);
        buttonInse = findViewById(R.id.buttonInserir);
        nomeInserir = findViewById(R.id.insNome);




        sqliteDB = openOrCreateDatabase("db", MODE_PRIVATE,null);

        sqliteDB.execSQL("Create table  if not exists usr(id INTEGER PRIMARY KEY AUTOINCREMENT,"+" nome VARCHAR) ;");





    }
    @SuppressLint("Range")
    public void criaUser(View v) {

        String nome = String.valueOf(nomeInserir.getText());
        ContentValues cv = new ContentValues();
        cv.put("nome",nome);
        sqliteDB.insert("usr", null,cv);
        Log.d("OnclickEvent", "FOI");

        Cursor cursor = sqliteDB.rawQuery("select * from usr", null);
        cursor.moveToFirst();
        ArrayList<String> listaUser = new ArrayList<String>();
        while (!cursor.isAfterLast()){
            listaUser.add(cursor.getString( cursor.getColumnIndex("nome")));

            cursor.moveToNext();
        }
        ArrayAdapter<String> arrayAdapter = new ArrayAdapter<>(
                this,
                android.R.layout.simple_list_item_1,
                android.R.id.text1,listaUser);

        listView.setAdapter(arrayAdapter);

    }

}