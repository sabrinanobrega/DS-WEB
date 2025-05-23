package com.example.PrimeiraAtiv
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.PrimeiraAtiv.ui.theme.MinhaAtividade1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            MinhaAtividade1Theme {
                TelaPrincipal()
            }
        }
    }
}

@Preview
@Composable
fun TelaPrincipal() {
    Column(
        verticalArrangement = Arrangement.Center,
        horizontalAlignment = Alignment.CenterHorizontally,
        modifier = Modifier.fillMaxSize()
            .background(Color.Green)
    ) {
        CartaoDeContato("Sabrina Nobrega", "15981496605", "sabrina@gmail.com")
        Spacer(modifier = Modifier.height(16.dp))
        CartaoDeContato("Nubia Araujo", "21987082162", "Nubia@gmail.com")
        Spacer(modifier = Modifier.height(16.dp))
        Text(
            text = "Lista de contatos",
            style = TextStyle(
                color = Color.Red,
                fontSize = 30.sp
            )
        )
    }
}

@Composable
fun CartaoDeContato(nome: String, telefone: String, email: String) {
    Card(
        modifier = Modifier
            .fillMaxWidth()
            .padding(8.dp),
        shape = RoundedCornerShape(8.dp)
    ) {
        Column(
            modifier = Modifier
                .padding(16.dp)
                .fillMaxWidth(),
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Nome: $nome")
            Text(text = "Telefone: $telefone")
            Text(text = "Email: $email")
        }
    }
}
