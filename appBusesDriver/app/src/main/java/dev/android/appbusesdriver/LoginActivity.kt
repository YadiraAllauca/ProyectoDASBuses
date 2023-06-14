package dev.android.appbusesdriver

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.Window
import dev.android.appbusesdriver.databinding.ActivityLoginBinding

class LoginActivity : AppCompatActivity() {
    private lateinit var binding : ActivityLoginBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityLoginBinding.inflate(layoutInflater)
        requestWindowFeature(Window.FEATURE_NO_TITLE)
        supportRequestWindowFeature(Window.FEATURE_NO_TITLE)
        setContentView(binding.root)

        binding.btnBack.setOnClickListener {
            finish()
        }

        binding.btnNext.setOnClickListener {
            val intent = Intent(this, MainActivity::class.java).apply {
            }
            startActivity(intent)
        }
    }
}