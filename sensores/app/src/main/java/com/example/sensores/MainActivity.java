package com.example.sensores;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.Bundle;
import android.util.Log;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements SensorEventListener {
    private Sensor sensor;
    TextView txt;
    private SensorManager mSensorManager;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
         txt = (TextView) findViewById(R.id.tvSensor);



    mSensorManager = (SensorManager) getSystemService(Context.SENSOR_SERVICE);
    sensor = mSensorManager.getDefaultSensor(Sensor.TYPE_LIGHT);
     mSensorManager.registerListener( this, sensor, SensorManager.SENSOR_DELAY_NORMAL);
}
    public void onSensorChanged(SensorEvent event) {

    if (event.sensor.getType()== Sensor.TYPE_LIGHT){
        txt.setText("OLHA LA"+ event.values[0]);
    }

    }

    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {

    }
}