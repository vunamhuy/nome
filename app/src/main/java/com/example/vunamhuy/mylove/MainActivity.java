package com.example.vunamhuy.mylove;

import android.content.Intent;
import android.media.MediaPlayer;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.RelativeLayout;

import com.google.android.gms.appindexing.Action;
import com.google.android.gms.appindexing.AppIndex;
import com.google.android.gms.appindexing.Thing;
import com.google.android.gms.common.api.GoogleApiClient;

public class MainActivity extends AppCompatActivity {

    RelativeLayout mh;
    MediaPlayer song;
    ImageView imageView;

    public void AnhXa() {
        mh = (RelativeLayout) findViewById(R.id.manHinh);
        imageView = (ImageView)findViewById(R.id.imageViewImage);
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        AnhXa();
        // background
        mh.setBackgroundResource(R.drawable.bg1);
        // music background
        song = MediaPlayer.create(getApplicationContext(), R.raw.jingle);
        song.start();
        // effect image
        Animation f = AnimationUtils.loadAnimation(this, R.anim.fade);
        f.reset();
        imageView.clearAnimation();
        imageView.startAnimation(f);
        imageView.setOnClickListener(new View.OnClickListener(){

            public void onClick(View v) {
                Intent mhMusic = new Intent(getApplicationContext(), Music.class);
                startActivity(mhMusic);
                song.stop();
            }
        });
    }
}
